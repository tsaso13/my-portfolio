<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">                                                                                                                    მომწონს აქ ყველაფერი უბრალოდ ნავგიაციის მენიუ მინდა უფრო დახვეწილი და ლამაზი იყოს  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>პორტფოლიო - დავით წასიძე</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>დავით წასიძე</h1>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home">მთავარი</a></li>
                    <li><a href="#about">ჩემ შესახებ</a></li>
                    <li><a href="#contact">კონტაქტი</a></li>
                    <li><a href="resume/Davit_Tsasidze_CV.pdf" download>გადმოწერე რეზიუმე</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="section home">
            <div class="home-content">
                <h2>კეთილი იყოს თქვენი მობრძანება!</h2>
                <p>გამოიკვლიეთ ჩემი განათლება, გამოცდილება და უნარ-ჩვევები.</p>
            </div>
        </section>

        <section id="about" class="section about">
            <div class="container">
                <h2>ჩემ შესახებ</h2>
                <div class="about-content">
                    <p><strong>დაბადების თარიღი:</strong> 13.12.1998</p>
                    <p><strong>მისამართი:</strong> ალ. ყაზბეგის 51ა, ქ. თბილისი</p>
                    <p><strong>მობილური:</strong> 557 58 43 06</p>
                    <p><strong>ელ-ფოსტა:</strong> datotsasidze0@gmail.com</p>
                    <h3>განათლება</h3>
                    <ul>
                        <li>2017 – ქ. თბილისის 143-ე საჯარო სკოლა</li>
                        <li>2017 – დღემდე: ბიზნესის ადმინისტრირება და ფინანსები, ბიზნეს და ტექნოლოგიების უნივერსიტეტი (BTU)</li>
                        <li>2024 – SKILLWILL, პროგრამირების შესწავლა ნულიდან</li>
                    </ul>

                    <h3>სამუშაო გამოცდილება</h3>
                    <ul>
                        <li>04.10.2023 – 30.12.2023: Grand Hotel Binz, Germany – სამთვიანი პრაქტიკა სერვისში</li>
                        <li>2022-2023: Tbilisi Marriot – USAID და AMCHAM სტუმართმასპინძლობის საერთაშორისო სტანდარტების პროექტი</li>
                        <li>31.05.2022 – 28.08.2022: Best Western Castanea Hotel Luneburg, Germany – სამთვიანი პრაქტიკა სერვისში</li>
                        <li>2020-2021: AWG ფინანს აუდიტი – აუდიტი</li>
                        <li>03.02.2020 – 08.05.2020: McDonald's Germany – მზარეული</li>
                        <li>2019-2020: ZARA MAN – მოლარე კონსულტანტი</li>
                    </ul>

                    <h3>ენები</h3>
                    <ul>
                        <li>ქართული – მშობლიური</li>
                        <li>ინგლისური – A2</li>
                        <li>გერმანული – B1</li>
                    </ul>

                    <h3>კომპიუტერული უნარ-ჩვევები</h3>
                    <ul>
                        <li>Microsoft Word, PowerPoint, ინტერნეტი, სოციალური მედია, კალენდარი</li>
                        <li>ოფისური მოწყობილობები: კოპირება, ფაქსი, სკანირება</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="section contact">
            <div class="container">
                <h2>კონტაქტი</h2>
                <form action="contact_process.php" method="POST" class="contact-form">
                    <label for="name">სახელი:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">ელ-ფოსტა:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">მესიჯი:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">გაგზავნა</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 დავით წასიძე. ყველა უფლება დაცულია.</p>
        </div>
    </footer>
</body>
</html>

     









