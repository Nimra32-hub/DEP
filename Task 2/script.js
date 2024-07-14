
document.addEventListener('DOMContentLoaded', function() {
    const createBtn = document.getElementById('create-btn');
    const postsDiv = document.getElementById('posts');
    let posts = JSON.parse(localStorage.getItem('posts')) || [];

    function renderPosts() {
        postsDiv.innerHTML = '';
        posts.forEach((post, index) => {
            const postDiv = document.createElement('div');
            postDiv.className = 'post';

            const titleEl = document.createElement('h2');
            titleEl.textContent = post.title;

            const contentEl = document.createElement('p');
            contentEl.textContent = post.content;

            if (post.image) {
                const imageEl = document.createElement('img');
                imageEl.src = post.image;
                imageEl.classList.add('post-image'); // Add a class for styling
                postDiv.appendChild(imageEl);
            }

            const actionsDiv = document.createElement('div');
            actionsDiv.className = 'actions';

            const editBtn = document.createElement('button');
            editBtn.className = 'edit';
            editBtn.textContent = 'Edit';
            editBtn.onclick = function() {
                editPost(index);
            };

            const deleteBtn = document.createElement('button');
            deleteBtn.className = 'delete';
            deleteBtn.textContent = 'Delete';
            deleteBtn.onclick = function() {
                deletePost(index);
            };

            actionsDiv.appendChild(editBtn);
            actionsDiv.appendChild(deleteBtn);

            postDiv.appendChild(titleEl);
            postDiv.appendChild(contentEl);
            postDiv.appendChild(actionsDiv);

            postsDiv.appendChild(postDiv);
        });
        localStorage.setItem('posts', JSON.stringify(posts));
    }

    function createPost() {
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;
        const imageInput = document.getElementById('image');
        
        if (title && content && imageInput.files.length > 0) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const image = event.target.result;
                posts.push({ title, content, image });
                renderPosts();
                document.getElementById('title').value = '';
                document.getElementById('content').value = '';
                document.getElementById('image').value = '';
            };
            reader.readAsDataURL(imageInput.files[0]);
        } else {
            alert('Please fill in all fields and select an image.');
        }
    }

    function editPost(index) {
        const newTitle = prompt('Enter new title', posts[index].title);
        const newContent = prompt('Enter new content', posts[index].content);

        if (newTitle && newContent) {
            posts[index] = { ...posts[index], title: newTitle, content: newContent };
            renderPosts();
        }
    }

    function deletePost(index) {
        posts.splice(index, 1);
        renderPosts();
    }

    createBtn.addEventListener('click', createPost);
    renderPosts();
});
