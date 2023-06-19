<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
    <meta charset="<? bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#2f8cd0">
    <? wp_head() ?>
</head>

<body <? body_class(); ?>>
    <div class="bpinfo">
        <p></p>
    </div>
    <section class="navigation">
        <div class="navigation__narrow_container">

            <div class="logo">
                <a href="/">
                    <h3 aria-hidden="true">tm<strong>CODE</strong></h3>
                </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="link-active" href="/">Strona główna</a></li>
                    <li><a href="/strony">Strony internetowe</a></li>
                    <li><a href="/sklepy">Sklepy internetowe</a></li>
                    <li><a href="/inne">Usługi programistyczne</a></li>
                    <li><a href="/omnie">O mnie</a></li>
                    <li><a class="btn btn--small" style="text-transform: none;" href="/kontakt">Kontakt</a></li>
                </ul>
            </nav>

            <div class="burger-container">
                <i class="fa fa-bars burger" aria-hidden="true" title="Toggle navigation"></i>
            </div>
        </div>
    </section>