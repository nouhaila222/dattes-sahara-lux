<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paiment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="projet.css">
    <title>Paiement</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adress']);
        $tel = htmlspecialchars($_POST['tel']);

        // Set cookies that expire in 30 days
        setcookie("nom", $nom, time() + (86400 * 30), "/");
        setcookie("prenom", $prenom, time() + (86400 * 30), "/");
        setcookie("adresse", $adresse, time() + (86400 * 30), "/");
        setcookie("tel", $tel, time() + (86400 * 30), "/");

        // echo "<div class='alert alert-success' role='alert'>Vos informations de paiement ont été enregistrées avec succès!</div>";
    }
    ?>

    <header>
        <a href="#" class="logo"><img src="FB_IMG_1693152731950.jpg" alt="Logo_Dattes_Sahara_Lux" class="rounded-circle" width="60px" height="60px">Dattes Sahara Lux</a>
        <nav class="navigation">
            <a href="projet1.html" target="_self">Acceuil</a>
            <a href="service.html">Nos Services</a>
            <a href="contact.html" target="_self">Contact</a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i><input type="search" name="search" id="search"></a>
        </nav>
    </header>

    <section>
        <form id="paymentForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adress" name="adress" required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="tel" name="tel" pattern="\d+" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <section>
        <div>
          Bienvenu <?php echo isset($_COOKIE['nom']) ? htmlspecialchars($_COOKIE['nom']) : ''; ?> <?php echo isset($_COOKIE['prenom']) ? htmlspecialchars($_COOKIE['prenom']) : ''; ?>, votre commande est valide.
        </div>
    </section>

    <footer>
        <div class="container" id="container2">
          <div class="row">
          <div class="col-md-4" id="adresse">
            <p><span>Adresse:</span>Guelmim, Hay Tayert Lycee Mohamed5 rue 08</p>
          </div>
          <div class="col-md-4">
            <p>Suivez-nous</p>
            <dl><a href="https://www.instagram.com/dattes_sahara_lux/" target="_self"><i class="fa-brands fa-instagram"></i> Dattes Sahara Lux</a></dl>
            <dl><a href="https://www.facebook.com/profile.php?id=61550010777267" target="_self"><i class="fa-brands fa-facebook"></i> Dattes Sahara Lux</a></dl>
            <dl><a href="https://www.tiktok.com/@dattes_sahara_lux?_t=8ijqRTrmLaA&_r=1" target="_self"><i class="fa-brands fa-tiktok"></i> Datte Sahara Lux</a></dl>
          </div>
          <div class="col-md-4" id="contact">
            <p>Contactez-nous</p>
            <a href="mailto:dattessaharalux@gmail.com">Email: dattessaharalux@gmail.com</a><br>
            <a href="https://wa.me/212636121575"><i class="fa-brands fa-whatsapp"></i> +212 636-121575</a><br>
            <a href="https://wa.me/212651307135"><i class="fa-brands fa-whatsapp"></i> +212 651-307135</a>
          </div>
          </div>
        </div>
        <div class="copyright">
          <label>Copyright &copy; 2024</label>
        </div>
      </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('paymentForm');
            form.addEventListener('submit', function (event) {
                const nom = document.getElementById('nom').value.trim();
                const prenom = document.getElementById('prenom').value.trim();
                const adresse = document.getElementById('adress').value.trim();
                const tel = document.getElementById('tel').value.trim();

                if (!nom || !prenom || !adresse || !tel) {
                    alert('Veuillez remplir tous les champs.');
                    event.preventDefault();
                } else if (!/^\d+$/.test(tel)) {
                    alert('Veuillez entrer un numéro de téléphone valide.');
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
