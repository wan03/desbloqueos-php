import React from "react";
import { Router, Route, Link } from "react-router-dom";
import createBrowserHistory from "history/createBrowserHistory";

//public pages

import Toolbar from "../Toolbar/Toolbar";
import Home from "../Pages/HomePage/HomePage";
import Celulares from "../Pages/SearchProductPage/SearchProductPage";
import About from "../Pages/About/about";
import Contact from "../Pages/Contact/contact";
import FeaturedPhones from "../Pages/HomePage/FeaturedPhones";
import PhoneImage from "../Pages/ProductInfoPage/PhoneImage";

import ProductInfoPage from "../Pages/ProductInfoPage/ProductInfoPage";
import ProductInfoPage_01 from "../Pages/ProductInfoPage-01/ProductInfoPage_01";
import ProductInfoPage_02 from "../Pages/ProductInfoPage-02/ProductInfoPage_02";
import ProductInfoPage_03 from "../Pages/ProductInfoPage-03/ProductInfoPage_03";
import ProductInfoPage_04 from "../Pages/ProductInfoPage-04/ProductInfoPage_04";


// import Account from "./pageComponents/Account";

//auth pages
// import requireAuth from "./authComponents/common/requireAuth";

// misc
// import NoMatch from "./components/NoMatch";

const routerHistory = createBrowserHistory();

const Routes = () => {
    return (
        <Router history={routerHistory}>
            <div>
                <Toolbar />
                <Route exact path="/" component={Home} />
                <Route path="/celulares" component={Celulares} />
                <Route path="/ProductInfoPage" component={ProductInfoPage} />
                <Route exact path="/ProductInfoPage_id=1" component={ProductInfoPage_01} />
                <Route exact path="/ProductInfoPage_id=2" component={ProductInfoPage_02} />
                <Route exact path="/ProductInfoPage_id=3" component={ProductInfoPage_03} />
                <Route exact path="/ProductInfoPage_id=4" component={ProductInfoPage_04} />
                <Route path="/about" component={About} />
                <Route path="/contact" component={Contact} />
                <Route path="/FeaturedPhones" component={FeaturedPhones} />
                <Route path="/PhoneImage" component={PhoneImage} />

            </div>
            {/* <Route path="/Account" component={requireAuth(Account)} /> */}
        </Router>
    );
};

export default Routes;
