import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';

//import your class pages here...
import AnotherPage from './components/AnotherPage';
import Navigation from './components/Navigation';
import Footer from './components/Footer';


export default class Index extends Component {
    render() {
        return (
            <div>
                <Router>
                    <div>
                        <Navigation />

                        <Route exact path="/" component={AnotherPage} />

                         <Footer />
                    </div>
                </Router>

            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
