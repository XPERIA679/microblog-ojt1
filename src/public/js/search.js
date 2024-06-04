async function filterUsernames() {
    const query = document.getElementById('search-bar').value;
    const dropdown = document.getElementById('dropdown');

    if (query.length === 0) {
        dropdown.classList.add('hidden');
        return;
    }

    const response = await fetch(`/api/usernames?query=${query}`);
    const usernames = await response.json();

    dropdown.innerHTML = '';
    if (usernames.length === 0) {
        dropdown.classList.add('hidden');
        return;
    }

    usernames.forEach(username => {
        const div = document.createElement('div');
        div.className = 'dropdown-item p-2 hover:bg-mycream';
        div.textContent = username;
        div.addEventListener('click', () => {
            console.log(`Username clicked: ${username}`);
            document.getElementById('search-bar').value = username;
            dropdown.classList.add('hidden');
        });
        dropdown.appendChild(div);
    });
    dropdown.classList.remove('hidden');
}

document.getElementById('search-bar').addEventListener('focus', () => {
    const query = document.getElementById('search-bar').value;
    if (query.length > 0) {
        document.getElementById('dropdown').classList.remove('hidden');
    }
});

document.addEventListener('click', (event) => {
    const searchContainer = document.getElementById('search-container');
    const dropdown = document.getElementById('dropdown');
    if (!searchContainer.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});

document.getElementById('dropdown').addEventListener('click', (event) => {
    event.stopPropagation();
});
