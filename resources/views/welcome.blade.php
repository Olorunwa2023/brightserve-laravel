
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightServe | Digital Solutions</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #243047;
            background: #f7f9fc;
        }

        header {
            background: #ffffff;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #1769e0;
        }

        nav a {
            text-decoration: none;
            color: #243047;
            margin-left: 22px;
            font-weight: 600;
        }

        .hero {
            min-height: 480px;
            padding: 100px 8%;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #eaf2ff, #ffffff);
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #1769e0;
        }

        .hero p {
            font-size: 18px;
            color: #596579;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: #1769e0;
            color: white;
            padding: 13px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .services {
            padding: 65px 8%;
            text-align: center;
        }

        .services h2 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .intro {
            color: #687386;
            margin-bottom: 35px;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .service-card {
            background: white;
            padding: 30px 22px;
            border-radius: 10px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.05);
        }

        .service-card h3 {
            margin: 12px 0;
            color: #1769e0;
        }

        .service-card p {
            color: #687386;
        }

        footer {
            background: #172b4d;
            color: white;
            text-align: center;
            padding: 24px;
            margin-top: 30px;
        }

        @media (max-width: 700px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 7px;
                font-size: 14px;
            }

            .hero {
                padding: 70px 7%;
            }

            .hero h1 {
                font-size: 36px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">BrightServe</div>

        <nav>
            <a href="/">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
        </nav>
    </header>

    <section class="hero" id="about">
        <div class="hero-content">
            <h1>Smart Digital Solutions for a <span>Brighter Future</span></h1>

            <p>
                BrightServe helps individuals and businesses solve problems
                through reliable technology, digital services, and innovative
                solutions.
            </p>

            <a href="#services" class="button">Explore Our Services</a>
        </div>
    </section>

    <section class="services" id="services">
        <h2>What We Do</h2>

        <p class="intro">
            Practical digital solutions designed to help you grow.
        </p>

        <div class="service-grid">
            <div class="service-card">
                <div style="font-size: 35px;">💻</div>
                <h3>Web Development</h3>
                <p>
                    Building modern, responsive websites for individuals
                    and businesses.
                </p>
            </div>

            <div class="service-card">
                <div style="font-size: 35px;">📊</div>
                <h3>Data Analysis</h3>
                <p>
                    Turning data into useful insights that support
                    better decisions.
                </p>
            </div>

            <div class="service-card">
                <div style="font-size: 35px;">🛠️</div>
                <h3>Digital Services</h3>
                <p>
                    Using technology to improve everyday tasks and
                    business operations.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 BrightServe. All rights reserved.</p>
    </footer>

</body>
</html>
