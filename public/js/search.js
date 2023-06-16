const search = document.querySelector('input[placeholder="search"]');
const postContainer = document.querySelector(".posts");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (posts) {
            postContainer.innerHTML = "";
            loadPosts(posts)
        });
    }
});

function loadPosts(posts) {
    posts.forEach(post => {
        console.log(post);
        createPost(post);
    });
}

function createPost(post) {
    const template = document.querySelector("#post-template");

    const clone = template.content.cloneNode(true);
    const form = clone.querySelector("form");
    form.id = post.id;
    const image = clone.querySelector("input");
    image.src = `/public/uploads/${post.image}`;
    const title = clone.querySelector("span");
    title.innerHTML = post.title;
    const favorite = clone.querySelector(".heart-number");
    favorite.innerHTML = post.favorite;

    postContainer.appendChild(clone);
}