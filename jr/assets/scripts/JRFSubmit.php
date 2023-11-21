<script>
  console.log('hi');

  fetch('http://shpmy.rangermac.com/wp-json/rangermac/v1/my-endpoint/')
  .then(response => response.json())
  .then(data => {
      console.log(data); // Will log: { message: "Hello from your endpoint!" }
  })
  .catch(error => {
      console.error('There was an error!', error);
  });

</script>