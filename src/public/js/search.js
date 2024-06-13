async function queryUserIdByUsername(username) {
    try {
        const response = await fetch(`/api/userIdByUsername?username=${username}`);
        if (!response.ok) {
            throw new Error('Failed to fetch user ID');
        }
        const data = await response.json();
        return data.userId; 
    } catch (error) {
        console.error('Error querying user ID:', error);
        return null; 
    }
}

async function setInputValue(username, input) {
    try {
        const userId = await queryUserIdByUsername(username);
        if (userId) {
            input.value = userId; 
        }
    } catch (error) {
        console.error('Error setting input value:', error);
    }
}

async function filterUsernames() {
    const query = document.getElementById('search-bar').value.trim();
    const dropdown = document.getElementById('dropdown');

    if (query.length === 0) {
        dropdown.classList.add('hidden');
        return;
    }

    try {
        const response = await fetch(`/api/usernames?query=${query}`);
        if (!response.ok) {
            throw new Error('Failed to fetch usernames');
        }
        const usernames = await response.json();

        dropdown.innerHTML = '';

        if (usernames.length === 0) {
            dropdown.classList.add('hidden');
            return;
        }

        usernames.forEach(async username => {
            const form = document.createElement('form');
            form.action = `/show-profile-page?userId=${username}`;
            form.method = 'GET';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'userId';  

            await setInputValue(username, input);

            const button = document.createElement('button');
            button.className = 'font-semibold text-mydark cursor-pointer';
            button.textContent = username;

            form.appendChild(input);
            form.appendChild(button);

            const div = document.createElement('div');
            div.className = 'dropdown-item p-2 hover:bg-mycream';
            div.appendChild(form);

            div.addEventListener('click', () => {
                document.getElementById('search-bar').value = username;
                dropdown.classList.add('hidden');
            });

            dropdown.appendChild(div);
        });

        dropdown.classList.remove('hidden');
    } catch (error) {
        console.error('Error filtering usernames:', error);
    }
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
