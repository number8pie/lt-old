import React from 'react';
import DOMPurify from 'dompurify';

class Header extends React.Component {   
    render() {
        let styles = {
            width: '300px',
            height: 'auto'
        };

        let pageData = this.props.pages.filter( page => (page.slug === this.props.slug) );
        let acfData = pageData.map( data => (data.acf.page_content[0].banner) );
        let bannerImage = acfData.map( src => src.banner_image );
        let bannerContent = acfData.map( src => src.banner_content );
        let bannerContentSantitized = DOMPurify.sanitize(bannerContent);
        return (
            <header className="header">
                <section className="header__container">
                    <img style={styles} src={bannerImage} alt=""/>
                    <div className="header__container--content" dangerouslySetInnerHTML={{ __html: bannerContentSantitized }}></div>
                </section>
            </header>   
        )
    }
}

export default Header;