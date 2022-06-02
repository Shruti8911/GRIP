<?php include('nav.php'); ?>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        #contact{
            background-color: black;
            min-height:100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 1px;
        }
        .middle input, textarea{
            border-radius: 0px;
        }
        .middle h2{
            color: white;
            letter-spacing: 0.1rem;
            text-align: center;
            margin-bottom: 40px;
        }
        input{
            height: 35px;
            width: 230px;
            background-color: #19282F;
            border: none;
            padding: 10px;
            margin: 3px;
            color: white;
            background-image:linear-gradient(#0F0E0E,#2C3333, #203239,#2C3333,#0F0E0E);
        }
        textarea{
            height: 100px;
            width: 474px;
            background-color: #19282F;
            border: none;
            padding: 10px;
            margin: 3px;
            color: white;
            background-image:linear-gradient(#0F0E0E,#2C3333, #203239,#2C3333,#0F0E0E);
        }
        .button{
            text-align: center;
            background-image:linear-gradient(#0F0E0E,#2C3333, #203239,#2C3333,#0F0E0E);
            height: 45px;
            width: 120px;
            padding: 10px;
            margin-left: 182px;
            color: grey;
        }

</style>
<!------ Include the above in your HEAD tag ---------->

<section id="contact">
    <div class="middle">
       <h2>Contact Us</h2>
       <table>
        <tr>
            <td>
         <input type="text" name="name" placeholder="First Name">
         <input type="text" name="name" placeholder="Last Name">
           </td>
        <tr>
        <tr>
            <td>
         <input type="email" name="email" placeholder="Email">
         <input type="number" name="number" placeholder="Mobile No.">
           </td>
        <tr> 
        <tr>
           <td>
              <textarea placeholder="Message"></textarea>
           </td>
        </tr>   
       </table>
       <button onclick="sendContact()" class="button">Send</button>
    </div>
</section>
<script>
    function sendContact() {
            window.alert("Thank You");
    }
</script>

<?php include('footer.php'); ?>