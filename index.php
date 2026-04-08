<?php
class Page
{
    private $name;
    private $template;
    public function __construct($name, $template)
    {
        $this->name = $name;
        $this->template = $template;
    }

    public function render()
{
    echo $this->template;

}
}

class MainPage extends Page
{
    public function __construct()
    {
        $template = '
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(180deg, #090d14 0%, #111827 55%, #0f172a 100%);
                color: #f3f4f6;
            }

            .main-page {
                min-height: 100vh;
                padding: 48px 60px;
            }

            .topbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 70px;
            }

            .logo {
                font-size: 28px;
                font-weight: 700;
                letter-spacing: 0.08em;
                color: #f9fafb;
            }

            .logo span:first-child {
                color: #f87171;
            }

            .logo span:last-child {
                color: #60a5fa;
            }

            .nav {
                display: flex;
                gap: 14px;
            }

            .nav a {
                color: #cbd5e1;
                text-decoration: none;
                padding: 10px 16px;
                border: 1px solid #243041;
                border-radius: 999px;
                background: rgba(255,255,255,0.03);
                transition: 0.2s;
            }

            .nav a:hover {
                color: #ffffff;
                border-color: #3b4b63;
                background: rgba(255,255,255,0.08);
            }

            .hero {
                display: flex;
                flex-wrap: wrap;
                gap: 40px;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 70px;
            }

            .hero__content {
                flex: 1 1 520px;
                max-width: 620px;
            }

            .hero__badge {
                display: inline-block;
                margin-bottom: 18px;
                padding: 8px 14px;
                border-radius: 999px;
                background: rgba(96, 165, 250, 0.12);
                border: 1px solid rgba(96, 165, 250, 0.3);
                color: #93c5fd;
                font-size: 14px;
                font-weight: 700;
                letter-spacing: 0.04em;
            }

            .hero__title {
                margin: 0 0 20px;
                font-size: 58px;
                line-height: 1.08;
                color: #f8fafc;
            }

            .hero__title .red {
                color: #f87171;
            }

            .hero__title .blue {
                color: #60a5fa;
            }

            .hero__text {
                margin: 0 0 28px;
                font-size: 18px;
                line-height: 1.7;
                color: #94a3b8;
                max-width: 560px;
            }

            .hero__actions {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
            }

            .btn {
                display: inline-block;
                padding: 14px 24px;
                border-radius: 12px;
                text-decoration: none;
                font-weight: 700;
                transition: 0.2s ease;
            }

            .btn--red {
                background: linear-gradient(135deg, #ef4444, #b91c1c);
                color: #ffffff;
                box-shadow: 0 10px 24px rgba(239, 68, 68, 0.28);
            }

            .btn--red:hover {
                transform: translateY(-2px);
                box-shadow: 0 14px 28px rgba(239, 68, 68, 0.35);
            }

            .btn--blue {
                background: linear-gradient(135deg, #3b82f6, #1d4ed8);
                color: #ffffff;
                box-shadow: 0 10px 24px rgba(59, 130, 246, 0.28);
            }

            .btn--blue:hover {
                transform: translateY(-2px);
                box-shadow: 0 14px 28px rgba(59, 130, 246, 0.35);
            }

            .hero__panel {
                flex: 1 1 340px;
                max-width: 420px;
                background: linear-gradient(180deg, rgba(17,24,39,0.95), rgba(15,23,42,0.95));
                border: 1px solid #253041;
                border-radius: 24px;
                padding: 24px;
                box-shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
            }

            .hero__panel-title {
                margin: 0 0 18px;
                font-size: 22px;
                color: #f8fafc;
            }

            .hero__panel-list {
                display: flex;
                flex-direction: column;
                gap: 14px;
            }

            .hero__panel-item {
                padding: 14px 16px;
                border-radius: 14px;
                background: rgba(255,255,255,0.03);
                border: 1px solid #283548;
                color: #cbd5e1;
            }

            .hero__panel-item strong {
                display: block;
                margin-bottom: 6px;
                color: #ffffff;
            }

            .features-title {
                margin: 0 0 20px;
                font-size: 30px;
                color: #f8fafc;
            }

            .features {
                display: flex;
                flex-wrap: wrap;
                gap: 24px;
            }

            .feature-card {
                flex: 1 1 280px;
                min-width: 260px;
                background: #161b22;
                border: 1px solid #263041;
                border-radius: 20px;
                padding: 24px;
                box-shadow: 0 10px 26px rgba(0,0,0,0.25);
            }

            .feature-card__icon {
                width: 48px;
                height: 48px;
                border-radius: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 22px;
                margin-bottom: 16px;
                color: #fff;
            }

            .feature-card__icon.red {
                background: linear-gradient(135deg, #ef4444, #991b1b);
            }

            .feature-card__icon.blue {
                background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            }

            .feature-card__title {
                margin: 0 0 12px;
                font-size: 21px;
                color: #f9fafb;
            }

            .feature-card__text {
                margin: 0;
                color: #94a3b8;
                line-height: 1.65;
                font-size: 15px;
            }

            @media (max-width: 900px) {
                .main-page {
                    padding: 32px 20px;
                }

                .topbar {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 16px;
                    margin-bottom: 40px;
                }

                .hero {
                    margin-bottom: 48px;
                }

                .hero__title {
                    font-size: 42px;
                }
            }
        </style>

        <div class="main-page">
            <div class="topbar">
                <div class="logo"><span>Game</span><span>Zone</span></div>

                <div class="nav">
                    <a href="?page=main">Главная</a>
                    <a href="?page=blog">Блог</a>
                </div>
            </div>

            <section class="hero">
                <div class="hero__content">
                    <div class="hero__badge">Dark gaming portal</div>

                    <h1 class="hero__title">
                        Мир <span class="red">хоррора</span>, <span class="blue">экшена</span> и культовых серий
                    </h1>

                    <p class="hero__text">
                        Добро пожаловать на тёмную игровую страницу, где собраны атмосферные серии, легендарные персонажи
                        и мрачная эстетика. Исследуй подборки, узнавай о франшизах и переходи к карточкам игр.
                    </p>

                    <div class="hero__actions">
                        <a class="btn btn--red" href="?page=blog">Открыть блог</a>
                        <a class="btn btn--blue" href="?page=blog">Смотреть карточки</a>
                    </div>
                </div>

                <div class="hero__panel">
                    <h2 class="hero__panel-title">Популярные направления</h2>

                    <div class="hero__panel-list">
                        <div class="hero__panel-item">
                            <strong>Survival Horror</strong>
                            Зомби, вирусы, выживание и постоянное чувство опасности.
                        </div>

                        <div class="hero__panel-item">
                            <strong>Psychological Horror</strong>
                            Тревожная атмосфера, символизм и скрытые страхи персонажей.
                        </div>

                        <div class="hero__panel-item">
                            <strong>Stylish Action</strong>
                            Быстрые комбо, демоны, харизматичные герои и зрелищные сражения.
                        </div>
                    </div>
                </div>
            </section>

           
        </div>
        ';

        parent::__construct('main', $template);
    }
}




class BlogPage extends Page
{
   public function __construct()
    {
        $template = '
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 40px;
        background: linear-gradient(180deg, #0d1117 0%, #111827 100%);
        font-family: Arial, sans-serif;
        color: #e5e7eb;
    }

    .page-title {
        margin: 0 0 12px;
        font-size: 34px;
        color: #f3f4f6;
    }

    .page-text {
        margin: 0 0 28px;
        color: #9ca3af;
        font-size: 16px;
    }

    .back-link {
        display: inline-block;
        margin-bottom: 24px;
        color: #60a5fa;
        text-decoration: none;
        font-weight: bold;
        transition: 0.2s;
    }

    .back-link:hover {
        color: #93c5fd;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
    }

    .blog-card {
        width: 360px;
        background: #161b22;
        border: 1px solid #263041;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.45);
    }

    .blog-card__image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        border-bottom: 1px solid #263041;
    }

    .blog-card__content {
        padding: 22px;
    }

    .blog-card__title {
        margin: 0 0 14px;
        font-size: 24px;
        line-height: 1.3;
        color: #f9fafb;
    }

    .blog-card__text {
        margin: 0 0 20px;
        font-size: 15px;
        line-height: 1.6;
        color: #b6c0cf;
    }

    .blog-card__footer {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    .blog-card__meta {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .blog-card__category {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    .blog-card__category--red {
        color: #f87171;
    }

    .blog-card__category--blue {
        color: #60a5fa;
    }

    .blog-card__date {
        font-size: 14px;
        color: #94a3b8;
    }

    .blog-card__comments {
        min-width: 42px;
        height: 42px;
        padding: 0 12px;
        border-radius: 999px;
        background: #1f2937;
        border: 1px solid #334155;
        color: #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
    }
</style>

<a class="back-link" href="?page=main">← Назад на главную</a>

<h1 class="page-title">Game Blog</h1>
<p class="page-text">Тёмная подборка культовых игровых серий: хоррор, мистика и стильный экшен.</p>

<div class="cards">

    <div class="blog-card">
        <img class="blog-card__image" src="https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=900&q=80" alt="Resident Evil cover">
        <div class="blog-card__content">
            <h2 class="blog-card__title">Resident Evil</h2>
            <p class="blog-card__text">
                Легендарная серия survival horror от Capcom, известная зомби, биологическими экспериментами и атмосферой постоянного напряжения.
            </p>
            <div class="blog-card__footer">
                <div class="blog-card__meta">
                    <span class="blog-card__category blog-card__category--red">Survival Horror</span>
                    <span class="blog-card__date">Classic horror franchise</span>
                </div>
                <div class="blog-card__comments">9</div>
            </div>
        </div>
    </div>

    <div class="blog-card">
        <img class="blog-card__image" src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80" alt="Silent Hill cover">
        <div class="blog-card__content">
            <h2 class="blog-card__title">Silent Hill</h2>
            <p class="blog-card__text">
                Мрачная психологическая серия, в которой туман, вина, страх и символизм создают одно из самых тревожных игровых миров.
            </p>
            <div class="blog-card__footer">
                <div class="blog-card__meta">
                    <span class="blog-card__category blog-card__category--blue">Psychological Horror</span>
                    <span class="blog-card__date">Dark and symbolic</span>
                </div>
                <div class="blog-card__comments">7</div>
            </div>
        </div>
    </div>

    <div class="blog-card">
        <img class="blog-card__image" src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=900&q=80" alt="Devil May Cry cover">
        <div class="blog-card__content">
            <h2 class="blog-card__title">Devil May Cry</h2>
            <p class="blog-card__text">
                Серия стильных экшенов про Данте, где динамичные комбо, демоны и яркая подача делают каждую битву зрелищной.
            </p>
            <div class="blog-card__footer">
                <div class="blog-card__meta">
                    <span class="blog-card__category blog-card__category--red">Stylish Action</span>
                    <span class="blog-card__date">Fast-paced demon hunter</span>
                </div>
                <div class="blog-card__comments">5</div>
            </div>
        </div>
    </div>

</div>
';


        parent::__construct('blog', $template);
    }
}

$pageName = $_GET['page'] ?? 'main';

if ($pageName === 'blog') {
    $page = new BlogPage();
} else {
    $page = new MainPage();
}

$page->render();

?>
