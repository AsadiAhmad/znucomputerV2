function includeHTML(url, targetID, tag) {
    fetch(url)
    .then(response => response.text())
    .then(data => {
        // Create a temporary element to hold the retrieved HTML content
        const tempContainer = document.createElement('div');
        tempContainer.innerHTML = data;

        // Get the outermost element from the retrieved content
        const footerElement = tempContainer.querySelector(tag);

        // Replace the existing content with the footer element
        document.getElementById(targetID).replaceWith(footerElement);
    })
    .catch(error => console.log(error));
}
window.includeHTML = includeHTML;