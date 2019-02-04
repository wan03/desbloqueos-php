import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';


import Footer from './components/Footer/Footer'
import Toolbar from './components/Toolbar/Toolbar'
import HomePage from './components/Pages/HomePage/HomePage'


// Page Main Style
import './components/Pages/Main.css'

export default class Index extends Component {

    render() {
        return (
           <div style={{height: '100%'}}>
               <Toolbar/>
               <main style={{marginTop: '56px'}}>
               <HomePage/>
               <Footer/>
               </main>
           </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
