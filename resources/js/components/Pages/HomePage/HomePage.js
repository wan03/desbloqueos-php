import React from "react";

import HomeHeader from './HomeHeader';
import FeaturedPhones from './FeaturedPhones';
import HomeVideo from './HomeVideo';
import './HomePage.css';

function HomePage(props) {
    return (
        <div className="HeaderWrapper" >
            <HomeHeader/>
            <div >
                <FeaturedPhones />
            </div>
            <div>
                <HomeVideo />
            </div>

        </div>
    );
}

export default HomePage;
