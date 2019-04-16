import React, { Component } from 'react';
import Header from './Header';
import '../App.scss';
import Nav from './Nav';

let socialAccounts = {
  'facebook': {
    'title' : 'Facebook',
    'link'  : 'http://www.facebook.com'
  },
  'twitter': {
    'title' : 'Twitter',
    'link'  : 'http://www.twitter.com'
  }, 
  'intsagram': {
    'title' : 'Intsagram',
    'link'  : 'http://www.instagram.com'
  }   
}

const apiUrlPages = 'http://wp.leethomas.localhost/index.php/wp-json/wp/v2/pages';


class App extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      pages: []
    }
  }

  componentDidMount(){
    fetch(apiUrlPages)
      .then(res => res.json())
      .then(res => {
        this.setState({
          pages: res
        })
    });
  }

  render(){
    return(
      <>
        <Nav social={socialAccounts} pages={this.state.pages}></Nav>
        <Header slug={this.props.match.params.slug} pages={this.state.pages} ></Header>
      </>
    )
  }
}

export default App;