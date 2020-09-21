export default class HTTP {
    // Make an HTTP GET Request
    async get(url) {
        const res = await fetch(url);
        return res.json();
    }

    // Make an HTTP Post Request
    async post(url, data) {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
                'X-WP-Nonce': s68_api_data.nonce
            },
            credentials: 'same-origin',
            body: JSON.stringify(data)
        })
        return await response.json();
    }

    // Make an HTTP Update Request
    async update(url, data) {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-type': 'application/json',
                'X-WP-Nonce': s68_api_data.nonce
            },
            credentials: 'same-origin',
            body: JSON.stringify(data)
        })
        return await response.json();
    }

    // Make an HTTP DELETE Request
    async delete(url) {
        const response = await fetch(url, {
            method: 'DELETE',
            headers: {
                'Content-type': 'application/json',
                'X-WP-Nonce': s68_api_data.nonce
            },
            credentials: 'same-origin'
        })
        return await response.json();
    }


}

