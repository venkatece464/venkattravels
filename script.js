document.getElementById('bookingForm').addEventListener('submit', async function (e) {
  e.preventDefault();
  const form = e.target;
  const formData = new FormData(form);

  const statusMsg = document.getElementById('statusMsg');
  statusMsg.textContent = "Sending...";

  try {
    const response = await fetch('mailer.php', {
      method: 'POST',
      body: formData
    });
    const result = await response.text();
    statusMsg.textContent = result;
    form.reset();
  } catch (error) {
    statusMsg.textContent = "Error sending booking. Please try again.";
  }
});
