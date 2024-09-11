// script.js

// Switch between sections
document.querySelectorAll('.sidebar ul li a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const sectionId = link.getAttribute('href').substring(1);

        // Hide all sections
        document.querySelectorAll('section').forEach(section => {
            section.classList.remove('active');
        });

        // Show the selected section
        document.getElementById(sectionId).classList.add('active');
    });
});

// By default, show the dashboard section
document.getElementById('dashboard').classList.add('active');

// Handle adding new posts
const addPostForm = document.getElementById('addPostForm');
const postList = document.getElementById('postList');

addPostForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const title = document.getElementById('title').value;
    const category = document.getElementById('category').value;
    const details = document.getElementById('details').value;

    if (title && category && details) {
        const newPost = document.createElement('li');
        newPost.innerHTML = `<span>${title}: Category ${category}</span> <button class="delete-btn" data-post-id="${postList.children.length + 1}">Delete</button>`;
        postList.appendChild(newPost);

        // Add delete functionality to the new post
        newPost.querySelector('.delete-btn').addEventListener('click', function() {
            postList.removeChild(newPost);
        });

        // Reset form
        addPostForm.reset();
    }
});

// Handle deleting posts (existing posts)
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        const postId = this.getAttribute('data-post-id');
        const postItem = this.parentElement;
        postList.removeChild(postItem);
    });
});
