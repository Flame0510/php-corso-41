<h1>Fetch API</h1>

<script>
    try {
        const response = await fetch('/api/users.php');
        const data = await response.json();

        console.log(data);

    } catch (error) {
        console.error('Error:', error);
    }
</script>