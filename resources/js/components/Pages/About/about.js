import React, { Component } from "react";
import Stripe from "../../Stripe/Stripe";
class About extends Component {
    render() {
        return (
            <div>
                <div>
                    <h2 data-st={process.env.REACT_APP_STRIPE_PUBLIC}>
                        This is an example of the about page in the router.
                        Modify as needed.
                    </h2>
                    <Stripe />
                </div>
            </div>
        );
    }
}

export default About;
