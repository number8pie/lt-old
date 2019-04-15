import React from 'react';

class Nav extends React.Component {
    render() {
        return (
            <nav className="nav">
                <ul className="nav__page_links">
                    {this.props.pages.map(key => (
                        <li key={key.id}>
                            <a href={key.slug}>
                                {key.title.rendered}
                            </a>
                        </li>
                    ))}
                </ul>
            </nav>
        )
    }
}

export default Nav;