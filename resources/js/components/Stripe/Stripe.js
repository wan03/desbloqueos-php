import React, { Component } from "react";
import { StripeProvider } from "react-stripe-elements";
import MyStoreCheckout from "./MyStoreCheckout";

class Stripe extends Component {
    render() {
        return (
            <StripeProvider apiKey={process.env.REACT_APP_STRIPE_PUBLIC}>
                <MyStoreCheckout />
            </StripeProvider>
        );
    }
}

export default Stripe;
