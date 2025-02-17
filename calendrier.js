function isValidDate(dateString) {
    const date = new Date(dateString);
    return date instanceof Date && !isNaN(date);
}
// Configuration de FullCalendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'multiMonth',
        type: 'multiMonth',
        duration: { months: 1 },
        month: 'long', 
        year: 'numeric',
        selectable: true,
        locale: 'fr',
        selectMirror: true,
        validRange: {
            start: new Date().toISOString().split('T')[0] // Interdire la sélection avant aujourd'hui
        },
        select: function(info) {
            var start = info.start;
            var end = info.end;
            
            // Vérifier si la plage de dates est inférieure à 3 jours
            var minDuration = 3 * 24 * 60 * 60 * 1000; // 3 jours en millisecondes
            if ((end - start) < minDuration) {
                alert("La réservation doit être d'au moins 3 jours.");
                calendar.unselect();
                return;
            }

            // Ajouter l'événement au calendrier
            calendar.addEvent({
                title: 'Location Takamaka',
                start: start,
                end: end,
                allDay: true
            });

            // Mettre à jour les champs de formulaire checkIn et checkOut
            document.getElementById('checkIn').value = start.toISOString().split('T')[0];
            document.getElementById('checkOut').value = end.toISOString().split('T')[0];
        },
        
        eventClick: function(info) {
            if (confirm("Voulez-vous vraiment supprimer cette plage de réservation ?")) {
                info.event.remove();
                // Réinitialiser les champs de formulaire checkIn et checkOut
                document.getElementById('checkIn').value = '';
                document.getElementById('checkOut').value = '';
            }
        }
    });

    // Charger les réservations depuis le serveur
    fetch('/path/to/your/api')
    .then(response => response.json())
    .then(data => {
        const validData = data.filter(item => isValidDate(item.dateEntree) && isValidDate(item.dateSortie));
        console.log("Valid data:", validData);
        
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
            events: validData.map(item => ({
                title: item.logement,
                start: item.dateEntree,
                end: item.dateSortie
            }))
        });
        calendar.render();
    })
    .catch(error => {
        console.error("Error parsing JSON:", error);
    });

    calendar.render();
});