const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const humanItems = document.querySelectorAll('#human-column li');
const oceanItems = document.querySelectorAll('#ocean-column li');
const validateButton = document.getElementById('validate-button');
const resultDiv = document.getElementById('result');

let startElement = null;
let connections = new Map();

// Correspondances correctes
const correctConnections = {
    heart: "currents",
    lungs: "photosynthesis",
    veins: "circulation",
    nervous: "coral",
    stomach: "benthic"
};

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    redrawConnections();
}

function drawLine(start, end, color = '#fff') {
    ctx.beginPath();
    ctx.moveTo(start.x, start.y);
    ctx.lineTo(end.x, end.y);
    ctx.strokeStyle = color;
    ctx.lineWidth = 2;
    ctx.stroke();
}

function getCenterPosition(element) {
    const rect = element.getBoundingClientRect();
    return {
        x: rect.left + rect.width / 2,
        y: rect.top + rect.height / 2
    };
}

function redrawConnections() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    connections.forEach((endId, startId) => {
        const startPos = getCenterPosition(document.querySelector(`[data-id="${startId}"]`));
        const endPos = getCenterPosition(document.querySelector(`[data-id="${endId}"]`));
        drawLine(startPos, endPos);
    });
}

function handleItemClick(event) {
    const element = event.target;
    if (!startElement) {
        startElement = element;
        element.style.backgroundColor = '#ff0';
        element.style.color = '#000';
    } else {
        const startId = startElement.dataset.id;
        const endId = element.dataset.id;

        const isSameColumn = startElement.parentElement === element.parentElement;
        if (isSameColumn) {
            alert("Reliez un élément du corps humain à un élément de l'océan.");
            startElement.style.backgroundColor = '';
            startElement.style.color = '';
            startElement = null;
            return;
        }

        connections.forEach((connectedEndId, connectedStartId) => {
            if (connectedStartId === startId || connectedEndId === startId || connectedEndId === endId || connectedStartId === endId) {
                connections.delete(connectedStartId);
            }
        });

        connections.set(startId, endId);

        redrawConnections();

        startElement.style.backgroundColor = '';
        startElement.style.color = '';
        startElement = null;
    }
}

function validateConnections() {
    let correctCount = 0;
    connections.forEach((endId, startId) => {
        if (correctConnections[startId] === endId) {
            correctCount++;
        }
    });

    const totalCorrect = Object.keys(correctConnections).length;
    resultDiv.innerHTML = `Vous avez ${correctCount} bonne(s) réponse(s) sur ${totalCorrect}.`;
}

humanItems.forEach(item => item.addEventListener('click', handleItemClick));
oceanItems.forEach(item => item.addEventListener('click', handleItemClick));

validateButton.addEventListener('click', validateConnections);

window.addEventListener('resize', resizeCanvas);
resizeCanvas();