window.onload = () => {
    const page = document.getElementById('page');
    const header = page.firstElementChild;
    const content = page.lastElementChild;
    const children = content.childNodes;

    content.firstElementChild.innerHTML = `<h2>Next Sibling of #header: ${header.nextElementSibling.nodeName}</h2>
                                    <h2>Previous Sibling of #content: ${content.previousElementSibling.nodeName}</h2>
                                    `;

    content.lastElementChild.innerHTML = `<h2>Parent Node of #content: ${content.parentNode.nodeName}</h2>
                                          <h2>Child Node of #page:</h2>`;
    children.forEach(ele =>{
        content.lastElementChild.innerHTML += '<br>' + ele.nodeName;
    });

    console.log(page.firstChild);
    console.log(page.lastChild);
    console.log(header.nextSibling);
    console.log(content.previousSibling);
    console.log(header.parentNode);
    console.log(page.childNodes);
    
}