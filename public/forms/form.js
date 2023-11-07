document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();
    var phone = document.getElementById("phone");
    if (phone.value == "") {
      phone.focus();
      phone.placeholder = "Example : 081284828821";
      alert("Phone number must be filled in!");
      document.getElementById("phone").setCustomValidity("Please enter a valid phone number.");
      this.classList.add("was-validated");
      return false;
    }

    if (phone.value.length != 12 && phone.value.length != 13 && phone.value.length != 14) {
        phone.focus();
        alert("Phone number must be a 10-12 number digits, you have entered " + phone.value.length + " digit");
        document.getElementById("nrp").setCustomValidity("Please enter a valid 10-12 phone number digits.");
        this.classList.add("was-validated");
        return false;
      }


    if (isNaN(phone.value) == true) {
      phone.focus();
      phone.placeholder = "Example : 081284828821";
      msg.innerHTML = "Phone number must be a number"
      document.getElementById("phone").setCustomValidity("Please enter a valid phone number.");
      this.classList.add("was-validated");
      return false;
    }

    if (this.checkValidity() === false) {
      event.stopPropagation();
      document.getElementById("phone").setCustomValidity("");
      document.getElementById("phone").classList.add("is-valid");

    } else {
      const number = "+6281270858355";
      const phone = document.getElementById("phone").value;
      const names = document.getElementById("names").value;
      const message = document.getElementById("message").value;
      const whatsappURL = `https://api.whatsapp.com/send?phone=${phone}&text=Hello Andika, My Name is ${names}. ${message}`;
      window.open(whatsappURL, "_blank");
    }
    this.classList.add("was-validated");
  });