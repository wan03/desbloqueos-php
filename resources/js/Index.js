import React, { Component } from "react";
import ReactDOM from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";

// import Footer from './components/Footer/Footer'
// import Toolbar from "./components/Toolbar/Toolbar";
// import HomePage from './components/Pages/HomePage/HomePage'
// import ProductInfoPage from './components/Pages/ProductInfoPage/ProductInfoPage'
// import SearchProductPage from "./components/Pages/SearchProductPage/SearchProductPage";
// import SearchProductPage from './components/CatchErr/ErrorBoundary'
// import Footer from "./components/Footer/Footer";
// import Toolbar from "./components/Toolbar/Toolbar";
// import HomePage from "./components/Pages/HomePage/HomePage";


// Page Routes
import Routes from "./components/Router/router";
// Page Main Style
import "./components/Pages/main.css";



export default class Index extends Component {

    constructor(props) {
        super(props);
        this.state = {
            phones: []
        };
      }
      componentDidMount () {
        axios.get('/api/mobiles').then(response => {
          this.setState({
            phones: response.data.data
          });
          console.log(response)
        }).catch(errors => {
            console.log(errors);
        })
      }









    render() {
        return (
            <div style={{ height: "100%" }}>
                <main style={{ marginTop: "56px" }}>
                    <Routes />
                </main>
            </div>
        );
    }
}

if (document.getElementById("app")) {
    ReactDOM.render(<Index />, document.getElementById("app"));
}
