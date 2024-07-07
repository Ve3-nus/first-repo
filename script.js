document.getElementById('projectForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch('./processes/project_processes.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
        } else {
            let projectDetails = `
                <h2>Project Details</h2>
                <p><strong>Project Name:</strong> ${data.projectname}</p>
                <p><strong>Description:</strong> ${data.description}</p>
                <p><strong>Start Date:</strong> ${data.started}</p>
                <p><strong>Completion Date:</strong> ${data.completed}</p>
            `;
            document.getElementById('projectDetails').innerHTML = projectDetails;
        }
    })
    .catch(error => console.error('Error:', error));
});