import React from "react";
import { Router, Route, Link } from "react-router-dom";
import createBrowserHistory from "history/createBrowserHistory";

//public pages

import Toolbar from "../Toolbar/Toolbar";
import Home from "../Pages/HomePage/HomePage";
import Celulares from "../Pages/SearchProductPage/SearchProductPage";
import ProductInfoPage from "../Pages/ProductInfoPage/ProductInfoPage";
import About from "../Pages/About/about";
import Contact from "../Pages/Contact/contact";

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
                <Route path="/about" component={About} />
                <Route path="/contact" component={Contact} />
            </div>
            {/* <Route path="/Account" component={requireAuth(Account)} /> */}
        </Router>
    );
};

export default Routes;
