import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';


// import Footer from './components/Footer/Footer'
import Toolbar from './components/Toolbar/Toolbar'
// import HomePage from './components/Pages/HomePage/HomePage'
// import ProductInfoPage from './components/Pages/ProductInfoPage/ProductInfoPage'
import SearchProductPage from './components/Pages/SearchProductPage/SearchProductPage'
// import SearchProductPage from './components/CatchErr/ErrorBoundary'


// Page Main Style
import './components/Pages/main.css'

export default class Index extends Component {

    render() {
        return (
           <div style={{height: '100%'}}>
               <Toolbar />
               <main style={{marginTop: '60px'}}>
               {/* <HomePage/> */}
               {/* <ProductInfoPage /> */}
               <SearchProductPage />
               {/* <Footer /> */}
               </main>
           </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
