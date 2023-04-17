const loadData = async () => {
    const ul = document.querySelector("#latest-books");
    ul.innerHTML = '<li class="loader"></li>';

    const response = await fetch("/api/books/latest");
    ul.innerHTML = "";

    const data_array = await response.json();
    data_array.forEach((book_object) => {
        console.log(book_object);
        const li = document.createElement("li");
        li.innerHTML = `
        <h3>${book_object.title}</h3>
        <img src="${book_object.image}">
        Authors: ${book_object.authors.map(author => author.name).join(', ')}
        `;
        ul.appendChild(li);
    });
};

loadData();
