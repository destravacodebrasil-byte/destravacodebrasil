<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Destrava Code</title>
    <link href="destrava.png" rel="icon" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            background: #050505;
        }

        body {
            position: relative;
            margin: 0;
            background: #050505;
            color: #ffffff;
            font-family: "Manrope", sans-serif;
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        ::selection {
            background: #ffd400;
            color: #080808;
        }

        .dark-site {
            position: relative;
            isolation: isolate;
            background: #050505;
            overflow: hidden;
        }

        .site-background {
            position: absolute;
            inset: 0;
            z-index: -2;
            pointer-events: none;
            overflow: hidden;
            background: #050505;
        }

        .background-grid {
            position: absolute;
            inset: 0;
            z-index: 5;

            background-image:
                linear-gradient(
                    rgba(255, 255, 255, 0.008) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255, 255, 255, 0.008) 1px,
                    transparent 1px
                );

            background-size: 80px 80px;
            opacity: 0.07;
            pointer-events: none;

            -webkit-mask-image: linear-gradient(
                to bottom,
                transparent 0%,
                black 12%,
                black 88%,
                transparent 100%
            );

            mask-image: linear-gradient(
                to bottom,
                transparent 0%,
                black 12%,
                black 88%,
                transparent 100%
            );
        }


        /* LUZES DO FUNDO */

        .background-light {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;

            transform-origin: center center;

            will-change: transform, opacity;

            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }


        .background-light-one {
            width: 1600px;
            height: 1200px;

            left: -1050px;
            top: -250px;

            background: radial-gradient(
                ellipse at center,
                rgba(255, 215, 0, 0.42) 0%,
                rgba(255, 207, 0, 0.32) 10%,
                rgba(255, 198, 0, 0.22) 20%,
                rgba(255, 188, 0, 0.13) 31%,
                rgba(255, 178, 0, 0.07) 42%,
                rgba(255, 168, 0, 0.03) 52%,
                rgba(255, 160, 0, 0.008) 61%,
                transparent 72%
            );

            animation: lightOne 10s ease-in-out infinite;
        }


        .background-light-two {
            width: 1550px;
            height: 1200px;

            right: -1080px;
            top: 450px;

            background: radial-gradient(
                ellipse at center,
                rgba(255, 215, 0, 0.38) 0%,
                rgba(255, 205, 0, 0.28) 11%,
                rgba(255, 195, 0, 0.19) 22%,
                rgba(255, 185, 0, 0.11) 33%,
                rgba(255, 175, 0, 0.055) 44%,
                rgba(255, 165, 0, 0.02) 54%,
                rgba(255, 155, 0, 0.005) 62%,
                transparent 73%
            );

            animation: lightTwo 12s ease-in-out infinite;
        }


        .background-light-three {
            width: 1650px;
            height: 1250px;

            left: -1100px;
            top: 1300px;

            background: radial-gradient(
                ellipse at center,
                rgba(255, 215, 0, 0.34) 0%,
                rgba(255, 205, 0, 0.25) 11%,
                rgba(255, 195, 0, 0.16) 23%,
                rgba(255, 185, 0, 0.09) 34%,
                rgba(255, 175, 0, 0.042) 45%,
                rgba(255, 165, 0, 0.014) 55%,
                rgba(255, 155, 0, 0.003) 63%,
                transparent 73%
            );

            animation: lightThree 11s ease-in-out infinite;
        }


        .background-light-four {
            width: 1650px;
            height: 1250px;

            right: -1100px;
            top: 2250px;

            background: radial-gradient(
                ellipse at center,
                rgba(255, 215, 0, 0.32) 0%,
                rgba(255, 205, 0, 0.23) 11%,
                rgba(255, 195, 0, 0.15) 23%,
                rgba(255, 185, 0, 0.08) 35%,
                rgba(255, 175, 0, 0.037) 46%,
                rgba(255, 165, 0, 0.012) 56%,
                rgba(255, 155, 0, 0.002) 64%,
                transparent 74%
            );

            animation: lightFour 13s ease-in-out infinite;
        }


        .background-light-five {
            width: 1400px;
            height: 1100px;

            left: 8%;
            top: 850px;

            background: radial-gradient(
                ellipse at center,
                rgba(255, 215, 0, 0.12) 0%,
                rgba(255, 205, 0, 0.08) 15%,
                rgba(255, 195, 0, 0.045) 28%,
                rgba(255, 185, 0, 0.02) 41%,
                rgba(255, 175, 0, 0.007) 53%,
                transparent 68%
            );

            animation: lightFive 9s ease-in-out infinite;
        }


        /* RESPIRAÇÃO DAS LUZES */

        @keyframes lightOne {
            0%,
            100% {
                transform: scale(0.72);
                opacity: 0.45;
            }

            50% {
                transform: scale(1.12);
                opacity: 0.90;
            }
        }


        @keyframes lightTwo {
            0%,
            100% {
                transform: scale(0.72);
                opacity: 0.40;
            }

            50% {
                transform: scale(1.10);
                opacity: 0.88;
            }
        }


        @keyframes lightThree {
            0%,
            100% {
                transform: scale(0.70);
                opacity: 0.40;
            }

            50% {
                transform: scale(1.08);
                opacity: 0.85;
            }
        }


        @keyframes lightFour {
            0%,
            100% {
                transform: scale(0.70);
                opacity: 0.38;
            }

            50% {
                transform: scale(1.08);
                opacity: 0.82;
            }
        }


        @keyframes lightFive {
            0%,
            100% {
                transform: scale(0.68);
                opacity: 0.25;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.55;
            }
        }


        /* NAVBAR */

        .navbar {
            position: fixed;

            top: 24px;
            left: 50%;

            transform: translateX(-50%);

            width: min(1020px, calc(100% - 50px));
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 12px 0 24px;

            background: rgba(18, 18, 18, 0.68);

            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 40px;

            backdrop-filter: blur(22px) saturate(145%);
            -webkit-backdrop-filter: blur(22px) saturate(145%);

            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.13),
                0 18px 50px rgba(0, 0, 0, 0.32);

            z-index: 1000;
        }


        .navbar::before {
            content: "";

            position: absolute;

            top: 0;
            left: 12%;

            width: 40%;
            height: 1px;

            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.55),
                transparent
            );

            pointer-events: none;
        }


        .navbar-logo {
            width: 44px;
            height: 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            transition: transform 0.3s ease;
        }


        .navbar-logo img {
            width: 39px;
            height: 39px;

            object-fit: contain;
            display: block;
        }


        .navbar-logo:hover {
            transform: scale(1.08);
        }


        .navbar-links {
            position: absolute;

            left: 50%;

            transform: translateX(-50%);

            display: flex;
            align-items: center;

            gap: 42px;
        }


        .nav-link {
            position: relative;

            color: rgba(255, 255, 255, 0.50);

            font-size: 12px;
            font-weight: 500;

            white-space: nowrap;

            transition:
                color 0.3s ease,
                transform 0.3s ease;
        }


        .nav-link:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }


        .nav-link.ativo {
            color: #ffffff;
        }


        .nav-link.ativo::after {
            content: "";

            position: absolute;

            left: 50%;
            bottom: -13px;

            transform: translateX(-50%);

            width: 4px;
            height: 4px;

            background: #ffd400;

            border-radius: 50%;

            box-shadow:
                0 0 10px rgba(255, 212, 0, 0.65);
        }


        .navbar-button {
            padding: 13px 23px;

            background: #ffd400;
            color: #080808;

            border-radius: 30px;

            font-size: 11px;
            font-weight: 700;

            transition:
                transform 0.3s ease,
                background 0.3s ease,
                box-shadow 0.3s ease;
        }


        .navbar-button:hover {
            transform: translateY(-2px);

            background: #ffe13b;

            box-shadow:
                0 8px 25px rgba(255, 212, 0, 0.16);
        }


        /* HERO */

        .hero {
            position: relative;

            min-height: 88vh;

            padding: 155px 8% 70px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: transparent;

            z-index: 2;
        }


        .hero-container {
            position: relative;

            width: 100%;
            max-width: 900px;

            display: flex;
            flex-direction: column;
            align-items: center;

            text-align: center;

            z-index: 5;
        }


        .hero-title {
            max-width: 1100px;

            margin: auto;

            font-size: clamp(64px, 7.2vw, 105px);

            line-height: 0.94;

            font-weight: 400;

            letter-spacing: -6px;
        }


        .hero-gradient {
            background: linear-gradient(
                110deg,
                #ffffff 0%,
                #ffffff 30%,
                #fff8dc 68%,
                #ffe89a 100%
            );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
            -webkit-text-fill-color: transparent;
        }


        .liquid-text {
            position: relative;

            display: inline-flex;
            align-items: center;

            margin-left: 4px;
            margin-top: 5px;

            padding: 3px 18px 7px;

            color: #ffe36b;
            -webkit-text-fill-color: #ffe36b;

            background: rgba(255, 255, 255, 0.065);

            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 19px;

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.18),
                0 12px 35px rgba(0, 0, 0, 0.20),
                0 0 25px rgba(255, 212, 0, 0.035);

            transition:
                transform 0.3s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease;
        }


        .liquid-text::before {
            content: "";

            position: absolute;

            top: 0;
            left: 15%;

            width: 55%;
            height: 1px;

            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.6),
                transparent
            );
        }


        .liquid-text:hover {
            transform: translateY(-3px);

            border-color: rgba(255, 212, 0, 0.30);

            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.22),
                0 15px 40px rgba(0, 0, 0, 0.25),
                0 0 30px rgba(255, 212, 0, 0.07);
        }


        .hero-description {
            max-width: 590px;

            margin-top: 28px;

            color: rgba(255, 255, 255, 0.48);

            font-size: 13px;

            line-height: 1.8;
        }


        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;

            gap: 12px;

            margin-top: 34px;
        }


        .hero-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 20px;

            min-height: 48px;

            padding: 0 22px;

            background: #ffd400;
            color: #080808;

            border: 1px solid #ffd400;
            border-radius: 30px;

            font-size: 11px;
            font-weight: 700;

            transition:
                transform 0.3s ease,
                background 0.3s ease,
                box-shadow 0.3s ease;
        }


        .hero-button span {
            font-size: 16px;
            transition: transform 0.3s ease;
        }


        .hero-button:hover {
            transform: translateY(-3px);

            background: #ffe13b;

            box-shadow:
                0 12px 30px rgba(255, 212, 0, 0.13);
        }


        .hero-button:hover span {
            transform: translate(3px, -3px);
        }


        .hero-button-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-height: 48px;

            padding: 0 22px;

            color: rgba(255, 255, 255, 0.72);

            background: rgba(255, 255, 255, 0.045);

            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 30px;

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            font-size: 11px;
            font-weight: 500;

            transition:
                transform 0.3s ease,
                color 0.3s ease,
                border-color 0.3s ease,
                background 0.3s ease;
        }


        .hero-button-secondary:hover {
            transform: translateY(-3px);

            color: #ffffff;

            border-color: rgba(255, 255, 255, 0.20);

            background: rgba(255, 255, 255, 0.07);
        }


        /* SERVIÇOS */

        .services {
            position: relative;

            padding: 70px 8% 90px;

            background: transparent;
        }


        .services-container {
            position: relative;

            max-width: 1180px;

            margin: auto;

            z-index: 2;
        }


        .section-label {
            display: flex;
            align-items: center;
            justify-content: center;

            gap: 12px;

            color: #ffd400;

            font-size: 10px;
            font-weight: 600;

            letter-spacing: 2.5px;

            text-transform: uppercase;
            text-align: center;
        }


        .section-label::before {
            content: "";

            width: 26px;
            height: 1px;

            background: #ffd400;
        }


        .services-title {
            max-width: 720px;

            margin: 20px auto 0;

            font-size: clamp(38px, 4.2vw, 55px);

            line-height: 1.05;

            font-weight: 400;

            letter-spacing: -3px;

            text-align: center;
        }


        .projects-title {
            max-width: 720px;

            margin: 20px auto 0;

            font-size: clamp(38px, 4.2vw, 55px);

            line-height: 1.05;

            font-weight: 400;

            letter-spacing: -3px;

            text-align: center;
        }


        .services-gradient {
            background: linear-gradient(
                110deg,
                #ffffff 0%,
                #ffffff 35%,
                #fff8dc 75%,
                #ffe89a 100%
            );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
            -webkit-text-fill-color: transparent;
        }


        .services-yellow {
            color: #ffd400;
        }


        .services-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 34px;

            margin-top: 65px;

            align-items: start;
        }


        .service-card {
            position: relative;

            min-height: 430px;

            padding: 38px 36px 34px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            background: #050505;

            border: 1px solid rgba(255, 255, 255, 0.075);
            border-radius: 18px;

            overflow: hidden;
            isolation: isolate;

            transition:
                transform 0.45s cubic-bezier(.2, .8, .2, 1),
                border-color 0.4s ease,
                box-shadow 0.4s ease;
        }


        .service-card:nth-child(2) {
            margin-top: 38px;
        }


        .service-card::before {
            content: "";

            position: absolute;

            width: 320px;
            height: 320px;

            top: -200px;
            right: -190px;

            border-radius: 50%;

            background: radial-gradient(
                circle,
                rgba(255, 212, 0, 0.11) 0%,
                rgba(255, 212, 0, 0.035) 35%,
                transparent 70%
            );

            opacity: 0;

            pointer-events: none;

            transition: opacity 0.45s ease;

            z-index: -1;
        }


        .service-card::after {
            content: "";

            position: absolute;

            top: 0;
            left: 13%;

            width: 48%;
            height: 1px;

            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.18),
                transparent
            );

            pointer-events: none;
        }


        .service-card:hover {
            transform: translateY(-8px);

            border-color: rgba(255, 212, 0, 0.20);

            box-shadow:
                0 28px 65px rgba(0, 0, 0, 0.30),
                0 0 40px rgba(255, 212, 0, 0.02);
        }


        .service-card:nth-child(2):hover {
            transform: translateY(-8px);
        }


        .service-card:hover::before {
            opacity: 1;
        }


        .service-top {
            position: relative;

            display: flex;
            align-items: flex-start;
            justify-content: space-between;

            z-index: 3;
        }


        .service-number {
            position: relative;

            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: rgba(255, 255, 255, 0.70);

            border: 1px solid rgba(255, 255, 255, 0.22);
            border-radius: 4px;

            font-size: 9px;
            font-weight: 600;

            letter-spacing: 0.8px;

            transition:
                color 0.35s ease,
                border-color 0.35s ease,
                background 0.35s ease,
                transform 0.35s ease;
        }


        .service-number::before {
            content: "";

            position: absolute;

            width: 28px;
            height: 28px;

            top: 7px;
            right: 7px;

            border-top: 1px solid rgba(255, 255, 255, 0.18);
            border-right: 1px solid rgba(255, 255, 255, 0.18);

            transition: border-color 0.35s ease;
        }


        .service-card:hover .service-number {
            color: #080808;

            background: #ffd400;

            border-color: #ffd400;

            transform: rotate(-4deg);
        }


        .service-card:hover .service-number::before {
            border-color: rgba(8, 8, 8, 0.28);
        }


        .service-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: none;

            background: transparent;

            color: rgba(255, 255, 255, 0.30);

            font-size: 17px;

            transition:
                transform 0.4s ease,
                color 0.4s ease;
        }


        .service-card:hover .service-icon {
            transform: translate(4px, -4px);
            color: #ffd400;
        }


        .service-big-number {
            display: none;
        }


        .service-content {
            position: relative;
            z-index: 3;
        }


        .service-line {
            width: 30px;
            height: 2px;

            margin-bottom: 20px;

            background: #ffd400;

            border-radius: 20px;

            transition: width 0.4s ease;
        }


        .service-card:hover .service-line {
            width: 52px;
        }


        .service-content h3 {
            max-width: 290px;

            color: #ffffff;

            font-size: 23px;
            font-weight: 500;

            line-height: 1.17;

            letter-spacing: -1px;
        }


        .service-content p {
            max-width: 290px;

            margin-top: 15px;

            color: rgba(255, 255, 255, 0.40);

            font-size: 12px;

            line-height: 1.75;

            transition: color 0.35s ease;
        }


        .service-card:hover .service-content p {
            color: rgba(255, 255, 255, 0.58);
        }
                /* PROJETOS */

        .projects {
            position: relative;
            padding: 125px 8% 145px;
            background: transparent;
        }

        .projects-container {
            position: relative;
            max-width: 1180px;
            margin: auto;
            z-index: 2;
        }

        .projects-title {
            max-width: 720px;
            margin: 20px auto 0;
            font-size: clamp(38px, 4.2vw, 55px);
            line-height: 1.05;
            font-weight: 400;
            letter-spacing: -3px;
            text-align: center;
        }

        .projects-title-light {
            background: linear-gradient(
                110deg,
                #ffffff 0%,
                #ffffff 40%,
                #fff5c4 100%
            );

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .projects-title-yellow {
            color: #ffd400;
        }

        .project-featured {
            margin-top: 58px;
        }

        .project-card {
            position: relative;
            overflow: hidden;

            background: rgba(10, 10, 10, 0.78);

            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 26px;

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            transition:
                transform 0.4s ease,
                border-color 0.4s ease,
                box-shadow 0.4s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);

            border-color: rgba(255, 212, 0, 0.25);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.28);
        }

        .project-image {
            position: relative;

            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            background: rgba(10, 10, 10, 0.70);
        }

        .project-image img {
            width: 100%;
            height: auto;

            display: block;

            object-fit: contain;

            transition:
                transform 0.7s cubic-bezier(.2, .8, .2, 1);
        }

        .project-card:hover .project-image img {
            transform: scale(1.012);
        }

        .project-info {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;

            padding: 24px 27px 26px;

            background: rgba(10, 10, 10, 0.72);

            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .project-name {
            font-size: 19px;
            font-weight: 500;
            letter-spacing: -0.7px;
        }

        .project-type {
            margin-top: 6px;

            color: rgba(255, 255, 255, 0.34);

            font-size: 9px;

            letter-spacing: 1.4px;

            text-transform: uppercase;
        }

        .project-arrow {
            width: 42px;
            height: 42px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 50%;

            color: #ffd400;

            font-size: 16px;

            transition:
                transform 0.35s ease,
                background 0.35s ease,
                color 0.35s ease;
        }

        .project-card:hover .project-arrow {
            transform: rotate(45deg);

            background: #ffd400;
            color: #080808;
        }

        .projects-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 16px;

            margin-top: 16px;
        }


        /* CONTATO */

        .contact {
            position: relative;

            padding: 115px 8% 25px;

            background: #ffd400;
            color: #080808;

            overflow: hidden;

            z-index: 5;
        }

        .contact::before {
            content: "";

            position: absolute;

            width: 900px;
            height: 900px;

            right: -400px;
            top: -520px;

            border-radius: 50%;

            background: radial-gradient(
                circle,
                rgba(255, 255, 255, 0.23) 0%,
                rgba(255, 255, 255, 0.10) 30%,
                rgba(255, 255, 255, 0.025) 52%,
                transparent 70%
            );

            pointer-events: none;
        }

        .contact-container {
            position: relative;

            max-width: 1180px;

            margin: auto;

            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 50px;

            z-index: 2;
        }

        .contact-content {
            max-width: 760px;
        }

        .contact-label {
            font-size: 10px;
            font-weight: 700;

            letter-spacing: 2.5px;

            text-transform: uppercase;
        }

        .contact-title {
            max-width: 760px;

            margin-top: 18px;

            font-size: clamp(44px, 5vw, 70px);

            line-height: 0.98;

            font-weight: 500;

            letter-spacing: -4.5px;
        }

        .contact-button {
            flex-shrink: 0;

            display: inline-flex;
            align-items: center;

            gap: 22px;

            padding: 16px 24px;

            background: #080808;
            color: #ffffff;

            border-radius: 35px;

            font-size: 11px;
            font-weight: 600;

            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }

        .contact-button span {
            color: #ffd400;

            font-size: 16px;

            transition: transform 0.3s ease;
        }

        .contact-button:hover {
            transform: translateY(-4px);
            background: #161616;
        }

        .contact-button:hover span {
            transform: translate(3px, -3px);
        }


        /* FOOTER */

        footer {
            position: relative;

            padding: 70px 8% 30px;

            background: #ffd400;
            color: #080808;

            z-index: 5;
        }

        .footer-container {
            width: 100%;
            max-width: 1180px;

            margin: auto;

            padding-top: 55px;

            display: grid;

            grid-template-columns: 1.35fr 0.75fr 1fr;

            gap: 80px;

            border-top: 1px solid rgba(8, 8, 8, 0.18);
        }

        .footer-brand {
            max-width: 360px;
        }

        .footer-logo {
            display: inline-flex;
            align-items: center;

            gap: 12px;

            transition: transform 0.3s ease;
        }

        .footer-logo:hover {
            transform: translateY(-2px);
        }

        .footer-logo img {
            width: 42px;
            height: 42px;

            object-fit: contain;
            display: block;

            filter: brightness(0);
        }

        .footer-logo span {
            color: #080808;

            font-size: 18px;
            font-weight: 700;

            letter-spacing: -0.7px;
        }

        .footer-description {
            max-width: 330px;

            margin-top: 20px;

            color: rgba(8, 8, 8, 0.58);

            font-size: 12px;

            line-height: 1.8;
        }

        .footer-socials {
            display: flex;
            align-items: center;

            gap: 9px;

            margin-top: 24px;
        }

        .footer-social {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #080808;

            background: rgba(8, 8, 8, 0.035);

            border: 1px solid rgba(8, 8, 8, 0.17);
            border-radius: 50%;

            transition:
                transform 0.3s ease,
                color 0.3s ease,
                background 0.3s ease,
                border-color 0.3s ease;
        }

        .footer-social svg {
            width: 16px;
            height: 16px;
        }

        .footer-social:hover {
            transform: translateY(-3px);

            color: #ffd400;
            background: #080808;

            border-color: #080808;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-heading {
            position: relative;

            padding-bottom: 13px;

            color: #080808;

            font-size: 14px;
            font-weight: 700;

            letter-spacing: -0.3px;
        }

        .footer-heading::after {
            content: "";

            position: absolute;

            left: 0;
            bottom: 0;

            width: 25px;
            height: 2px;

            background: #080808;

            border-radius: 20px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;

            align-items: flex-start;

            gap: 14px;

            margin-top: 22px;
        }

        .footer-link {
            color: rgba(8, 8, 8, 0.58);

            font-size: 12px;
            font-weight: 500;

            transition:
                color 0.3s ease,
                transform 0.3s ease;
        }

        .footer-link:hover {
            color: #080808;
            transform: translateX(4px);
        }

        .footer-contact-list {
            display: flex;
            flex-direction: column;

            gap: 15px;

            margin-top: 22px;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;

            gap: 11px;

            color: rgba(8, 8, 8, 0.60);

            font-size: 12px;

            line-height: 1.5;

            transition:
                color 0.3s ease,
                transform 0.3s ease;
        }

        a.footer-contact-item:hover {
            color: #080808;
            transform: translateX(3px);
        }

        .footer-contact-icon {
            width: 34px;
            height: 34px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #080808;

            border: 1px solid rgba(8, 8, 8, 0.17);
            border-radius: 50%;

            transition:
                background 0.3s ease,
                color 0.3s ease,
                border-color 0.3s ease;
        }

        .footer-contact-icon svg {
            width: 14px;
            height: 14px;
        }

        a.footer-contact-item:hover .footer-contact-icon {
            background: #080808;
            color: #ffd400;

            border-color: #080808;
        }

        .footer-bottom {
            width: 100%;
            max-width: 1180px;

            margin: 55px auto 0;

            padding-top: 23px;

            border-top: 1px solid rgba(8, 8, 8, 0.17);

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 25px;
        }

        .footer-copyright {
            color: rgba(8, 8, 8, 0.48);

            font-size: 9px;
        }

        .footer-back-top {
            display: flex;
            align-items: center;

            gap: 9px;

            color: rgba(8, 8, 8, 0.55);

            font-size: 9px;

            transition:
                color 0.3s ease,
                transform 0.3s ease;
        }

        .footer-back-top span {
            width: 28px;
            height: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #080808;

            border: 1px solid rgba(8, 8, 8, 0.18);
            border-radius: 50%;

            transition:
                color 0.3s ease,
                background 0.3s ease,
                border-color 0.3s ease;
        }

        .footer-back-top:hover {
            color: #080808;
            transform: translateY(-2px);
        }

        .footer-back-top:hover span {
            color: #ffd400;
            background: #080808;

            border-color: #080808;
        }


        /* ANIMAÇÕES DE ENTRADA */

        .reveal {
            opacity: 0;

            transform: translateY(25px);

            transition:
                opacity 0.8s cubic-bezier(.16, 1, .3, 1),
                transform 0.8s cubic-bezier(.16, 1, .3, 1);
        }

        .reveal.ativo-reveal {
            opacity: 1;
            transform: translateY(0);
        }


        /* RESPONSIVO */

        @media (max-width: 900px) {

            .services-grid {
                grid-template-columns: 1fr 1fr;
            }

            .service-card:nth-child(2) {
                margin-top: 0;
            }

            .contact-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-container {
                grid-template-columns: 1.2fr 0.8fr;
                gap: 55px;
            }

            .footer-brand {
                grid-column: 1 / -1;
                max-width: 420px;
            }
        }


        @media (max-width: 780px) {

            .navbar {
                width: calc(100% - 30px);
                height: 64px;

                padding: 0 15px;
            }

            .navbar-logo img {
                width: 34px;
                height: 34px;
            }

            .navbar-links {
                position: static;
                transform: none;

                gap: 20px;
            }

            .nav-link {
                font-size: 10px;
            }

            .navbar-button {
                display: none;
            }

            .hero {
                padding: 135px 25px 100px;
            }

            .hero-title {
                font-size: 46px;
                letter-spacing: -3px;
            }

            .hero-description {
                font-size: 12px;
            }

            .services {
                padding: 90px 25px 100px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                min-height: 330px;
            }

            .service-card:nth-child(2) {
                margin-top: 0;
            }

            .projects {
                padding: 90px 25px 100px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .contact {
                padding: 90px 25px 25px;
            }

            footer {
                padding: 55px 25px 25px;
            }
        }


        @media (max-width: 580px) {

            .navbar-logo {
                display: none;
            }

            .navbar {
                justify-content: center;
            }

            .navbar-links {
                width: 100%;

                justify-content: space-around;

                gap: 10px;
            }

            .hero-title {
                font-size: 38px;
                letter-spacing: -2.3px;
            }

            .liquid-text {
                margin-left: 0;
            }

            .hero-actions {
                width: 100%;
                flex-direction: column;
            }

            .hero-button,
            .hero-button-secondary {
                width: 100%;
                max-width: 280px;
            }

            .services-title,
            .projects-title {
                font-size: 38px;
                letter-spacing: -2px;
            }

            .service-card {
                min-height: 310px;
                padding: 28px;
            }

            .service-number {
                width: 52px;
                height: 52px;
            }

            .service-number::before {
                width: 24px;
                height: 24px;
            }

            .project-card {
                border-radius: 20px;
            }

            .project-info {
                padding: 20px;
            }

            .project-name {
                font-size: 17px;
            }

            .project-arrow {
                width: 38px;
                height: 38px;
            }

            .contact-title {
                font-size: 44px;
                letter-spacing: -2.5px;
            }

            .contact-button {
                margin-top: 10px;
            }

            .footer-container {
                grid-template-columns: 1fr;

                gap: 42px;

                padding-top: 45px;
            }

            .footer-brand {
                grid-column: auto;
                max-width: 100%;
            }

            .footer-description {
                max-width: 300px;
            }

            .footer-contact-item {
                font-size: 11px;
            }

            .footer-bottom {
                margin-top: 42px;

                flex-direction: column;
                align-items: flex-start;

                gap: 15px;
            }
        }

    </style>

</head>

<body>

    <nav class="navbar">

        <a href="#inicio" class="navbar-logo">
            <img src="destrava.png" alt="Destrava Code">
        </a>

        <div class="navbar-links">

            <a href="#inicio" class="nav-link ativo">
                Início
            </a>

            <a href="#servicos" class="nav-link">
                Serviços
            </a>

            <a href="#projetos" class="nav-link">
                Projetos
            </a>

            <a href="#contato" class="nav-link">
                Contato
            </a>

        </div>

        <a href="#contato" class="navbar-button">
            Falar agora
        </a>

    </nav>


    <div class="dark-site">

        <div class="site-background">

            <div class="background-light background-light-one"></div>

            <div class="background-light background-light-two"></div>

            <div class="background-light background-light-three"></div>

            <div class="background-light background-light-four"></div>

            <div class="background-light background-light-five"></div>

            <div class="background-grid"></div>

        </div>


        <section class="hero" id="inicio">

            <div class="hero-container">

                <h1 class="hero-title">

                    <span class="hero-gradient">
                        Toda ideia merece um espaço para
                    </span>

                    <span class="liquid-text">
                        crescer.
                    </span>

                </h1>

                <p class="hero-description">
                    Na Destrava Code, transformamos ideias em experiências digitais
                    através de sites modernos, funcionais e feitos para representar
                    a identidade de cada negócio.
                </p>

                <div class="hero-actions">

                    <a href="#servicos" class="hero-button">

                        Conheça nossos serviços

                        <span>↗</span>

                    </a>

                    <a
                        href="https://www.instagram.com/destravacode/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hero-button-secondary"
                    >
                        Fale com a gente
                    </a>

                </div>

            </div>

        </section>


        <section class="services" id="servicos">

            <div class="services-container">

                <h2 class="services-title">

                    <span class="services-gradient">
                        Criamos experiências digitais
                    </span>

                    <span class="services-yellow">
                        para o seu negócio.
                    </span>

                </h2>


                <div class="services-grid">

                    <article class="service-card">

                        <span class="service-big-number">
                            01
                        </span>

                        <div class="service-top">

                            <span class="service-number">
                                01 / 03
                            </span>

                            <span class="service-icon">
                                ↗
                            </span>

                        </div>

                        <div class="service-content">

                            <div class="service-line"></div>

                            <h3>
                                Sites Institucionais
                            </h3>

                            <p>
                                Sites modernos para apresentar sua empresa,
                                fortalecer sua marca e criar uma presença
                                profissional na internet.
                            </p>

                        </div>

                    </article>


                    <article class="service-card">

                        <span class="service-big-number">
                            02
                        </span>

                        <div class="service-top">

                            <span class="service-number">
                                02 / 03
                            </span>

                            <span class="service-icon">
                                ↗
                            </span>

                        </div>

                        <div class="service-content">

                            <div class="service-line"></div>

                            <h3>
                                Landing Pages
                            </h3>

                            <p>
                                Páginas desenvolvidas para apresentar produtos,
                                serviços e transformar visitantes em oportunidades.
                            </p>

                        </div>

                    </article>


                    <article class="service-card">

                        <span class="service-big-number">
                            03
                        </span>

                        <div class="service-top">

                            <span class="service-number">
                                03 / 03
                            </span>

                            <span class="service-icon">
                                ↗
                            </span>

                        </div>

                        <div class="service-content">

                            <div class="service-line"></div>

                            <h3>
                                Desenvolvimento Personalizado
                            </h3>

                            <p>
                                Soluções desenvolvidas de acordo com as
                                necessidades e objetivos específicos de cada projeto.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>
                <section class="projects" id="projetos">

            <div class="projects-container">

                <h2 class="projects-title">

                    <span class="projects-title-light">
                        Um pouco do que já
                    </span>

                    <span class="projects-title-yellow">
                        tiramos do papel.
                    </span>

                </h2>


                <div class="project-featured">

                    <div class="project-card">

                        <div class="project-image">

                            <img
                                src="burgues1.png"
                                alt="Projeto Burgues"
                            >

                        </div>

                        <div class="project-info">

                            <div>

                                <h3 class="project-name">
                                    Burgues
                                </h3>

                                <p class="project-type">
                                    Website Fictício
                                </p>

                            </div>

                            <span class="project-arrow">
                                ↗
                            </span>

                        </div>

                    </div>

                </div>


                <div class="projects-grid">

                    <div class="project-card">

                        <div class="project-image">

                            <img
                                src="burgues2.png"
                                alt="Cardápio digital Burgues"
                            >

                        </div>

                        <div class="project-info">

                            <div>

                                <h3 class="project-name">
                                    Cardápio digital
                                </h3>

                            </div>

                            <span class="project-arrow">
                                ↗
                            </span>

                        </div>

                    </div>


                    <div class="project-card">

                        <div class="project-image">

                            <img
                                src="burgues3.png"
                                alt="Experiência de pedido Burgues"
                            >

                        </div>

                        <div class="project-info">

                            <div>

                                <h3 class="project-name">
                                    Experiência de pedido
                                </h3>

                            </div>

                            <span class="project-arrow">
                                ↗
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>


    <section class="contact" id="contato">

        <div class="contact-container">

            <div class="contact-content">

                <div class="contact-label">
                    Tem uma ideia?
                </div>

                <h2 class="contact-title">
                    Vamos transformar ela em algo real.
                </h2>

            </div>


            <a
                href="mailto:destravacodebrasil@gmail.com"
                class="contact-button"
            >

                Entre em contato

                <span>↗</span>

            </a>

        </div>

    </section>


    <footer>

        <div class="footer-container">

            <div class="footer-brand">

                <a href="#inicio" class="footer-logo">

                    <img
                        src="destrava.png"
                        alt="Destrava Code"
                    >

                    <span>
                        Destrava Code
                    </span>

                </a>


                <p class="footer-description">
                    Criamos sites modernos, funcionais e pensados
                    para representar a identidade de cada negócio
                    no digital.
                </p>


                <div class="footer-socials">

                    <a
                        href="https://www.instagram.com/destravacode/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social"
                        aria-label="Instagram"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >

                            <rect
                                x="3"
                                y="3"
                                width="18"
                                height="18"
                                rx="5"
                                ry="5"
                            ></rect>

                            <circle
                                cx="12"
                                cy="12"
                                r="4"
                            ></circle>

                            <circle
                                cx="17.5"
                                cy="6.5"
                                r="1"
                                fill="currentColor"
                                stroke="none"
                            ></circle>

                        </svg>

                    </a>


                    <a
                        href="mailto:destravacodebrasil@gmail.com"
                        class="footer-social"
                        aria-label="E-mail"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >

                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            ></rect>

                            <path d="M3 7l9 6 9-6"></path>

                        </svg>

                    </a>

                </div>

            </div>


            <div class="footer-column">

                <h3 class="footer-heading">
                    Links rápidos
                </h3>


                <div class="footer-links">

                    <a href="#inicio" class="footer-link">
                        Início
                    </a>

                    <a href="#servicos" class="footer-link">
                        Serviços
                    </a>

                    <a href="#projetos" class="footer-link">
                        Projetos
                    </a>

                    <a href="#contato" class="footer-link">
                        Contato
                    </a>

                </div>

            </div>


            <div class="footer-column">

                <h3 class="footer-heading">
                    Contato
                </h3>


                <div class="footer-contact-list">

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >

                                <path
                                    d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"
                                ></path>

                                <circle
                                    cx="12"
                                    cy="10"
                                    r="2.5"
                                ></circle>

                            </svg>

                        </div>

                        <span>
                            Tatuí, SP - Brasil
                        </span>

                    </div>


                    <a
                        href="mailto:destravacodebrasil@gmail.com"
                        class="footer-contact-item"
                    >

                        <div class="footer-contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                ></rect>

                                <path d="M3 7l9 6 9-6"></path>

                            </svg>

                        </div>

                        <span>
                            destravacodebrasil@gmail.com
                        </span>

                    </a>


                    <a
                        href="https://www.instagram.com/destravacode/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-contact-item"
                    >

                        <div class="footer-contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >

                                <rect
                                    x="3"
                                    y="3"
                                    width="18"
                                    height="18"
                                    rx="5"
                                    ry="5"
                                ></rect>

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="4"
                                ></circle>

                                <circle
                                    cx="17.5"
                                    cy="6.5"
                                    r="1"
                                    fill="currentColor"
                                    stroke="none"
                                ></circle>

                            </svg>

                        </div>

                        <span>
                            @destravacode
                        </span>

                    </a>

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            <div class="footer-copyright">
                © 2026 Destrava Code
            </div>


            <a href="#inicio" class="footer-back-top">

                Voltar ao início

                <span>↑</span>

            </a>

        </div>

    </footer>


    <script>

        const navLinks =
            document.querySelectorAll(".nav-link");

        const sections =
            document.querySelectorAll("section[id]");


        function scrollLento(destino, duracao = 1500) {

            const inicio = window.pageYOffset;

            const distancia =
                destino - inicio;

            let tempoInicial = null;


            function animacaoScroll(tempoAtual) {

                if (!tempoInicial) {
                    tempoInicial = tempoAtual;
                }


                const tempoPassado =
                    tempoAtual - tempoInicial;


                const progresso =
                    Math.min(
                        tempoPassado / duracao,
                        1
                    );


                const suavizacao =
                    progresso < 0.5

                        ? 4 *
                          progresso *
                          progresso *
                          progresso

                        : 1 -
                          Math.pow(
                              -2 * progresso + 2,
                              3
                          ) / 2;


                window.scrollTo(
                    0,
                    inicio +
                    distancia *
                    suavizacao
                );


                if (tempoPassado < duracao) {

                    requestAnimationFrame(
                        animacaoScroll
                    );

                }

            }


            requestAnimationFrame(
                animacaoScroll
            );

        }


        function irParaSecao(
            elemento,
            duracao = 1500
        ) {

            if (!elemento) {
                return;
            }


            const offset = 105;


            const destino =
                elemento
                    .getBoundingClientRect()
                    .top
                +
                window.pageYOffset
                -
                offset;


            scrollLento(
                destino,
                duracao
            );

        }


        navLinks.forEach(link => {

            link.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();


                    const href =
                        this.getAttribute(
                            "href"
                        );


                    const destino =
                        document.querySelector(
                            href
                        );


                    irParaSecao(
                        destino
                    );

                }
            );

        });


        const navbarButton =
            document.querySelector(
                ".navbar-button"
            );


        if (navbarButton) {

            navbarButton.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();


                    irParaSecao(
                        document.querySelector(
                            "#contato"
                        )
                    );

                }
            );

        }


        const heroButton =
            document.querySelector(
                ".hero-button"
            );


        if (heroButton) {

            heroButton.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();


                    irParaSecao(
                        document.querySelector(
                            "#servicos"
                        )
                    );

                }
            );

        }


        const footerLogo =
            document.querySelector(
                ".footer-logo"
            );


        if (footerLogo) {

            footerLogo.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();

                    scrollLento(
                        0,
                        1500
                    );

                }
            );

        }


        const footerLinks =
            document.querySelectorAll(
                ".footer-link"
            );


        footerLinks.forEach(link => {

            link.addEventListener(
                "click",
                function(event) {

                    const href =
                        this.getAttribute(
                            "href"
                        );


                    if (
                        href &&
                        href.startsWith("#")
                    ) {

                        event.preventDefault();


                        const destino =
                            document.querySelector(
                                href
                            );


                        irParaSecao(
                            destino
                        );

                    }

                }
            );

        });


        const footerBackTop =
            document.querySelector(
                ".footer-back-top"
            );


        if (footerBackTop) {

            footerBackTop.addEventListener(
                "click",
                function(event) {

                    event.preventDefault();

                    scrollLento(
                        0,
                        1500
                    );

                }
            );

        }


        function atualizarNavbar() {

            const scrollAtual =
                window.scrollY + 180;


            let secaoAtual =
                "inicio";


            sections.forEach(section => {

                const topo =
                    section.offsetTop;


                if (
                    scrollAtual >= topo
                ) {

                    secaoAtual =
                        section.id;

                }

            });


            navLinks.forEach(link => {

                link.classList.remove(
                    "ativo"
                );


                const href =
                    link.getAttribute(
                        "href"
                    );


                if (
                    href ===
                    "#" + secaoAtual
                ) {

                    link.classList.add(
                        "ativo"
                    );

                }

            });

        }


        window.addEventListener(
            "scroll",
            atualizarNavbar
        );


        atualizarNavbar();


        const elementosReveal =
            document.querySelectorAll(
                ".section-label, " +
                ".services-title, " +
                ".service-card, " +
                ".projects-title, " +
                ".project-card, " +
                ".contact-content, " +
                ".contact-button, " +
                ".footer-brand, " +
                ".footer-column, " +
                ".footer-bottom"
            );


        elementosReveal.forEach(
            elemento => {

                elemento.classList.add(
                    "reveal"
                );

            }
        );


        const observerReveal =
            new IntersectionObserver(

                entries => {

                    entries.forEach(
                        entry => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add(
                                        "ativo-reveal"
                                    );


                                observerReveal
                                    .unobserve(
                                        entry.target
                                    );

                            }

                        }
                    );

                },

                {
                    threshold: 0.12,
                    rootMargin:
                        "0px 0px -60px 0px"
                }

            );


        elementosReveal.forEach(
            elemento => {

                observerReveal.observe(
                    elemento
                );

            }
        );

    </script>

</body>

</html>