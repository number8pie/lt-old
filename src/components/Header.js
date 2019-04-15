import React from 'react';

const Header = (props) => (
    <header className="header">
        <section className="header__content">
            <h1 className="header__content__title">{props.title}</h1>
            <h3 className="header__content__tagline">{props.tagline}</h3>
        </section>
    </header>   
)

export default Header;