import React from 'react';

import "./ProductInfoPage.css"

// Component imports
import ProductInfoHeader from './ProductInfoHeader';
import WrapperA from './WrapperA';
import WrapperB from './WrapperB';

import './../main.css';

class ProductInfoPage extends React.Component {

    state = {
        phones: {},
        iem: "",
        userCarrier: ""
    };


    componentDidMount() {
        axios.get('/api/mobiles' + this.props.match.params.id).then(response => {
            this.setState({
                phones: response.data.data
            });
            //   console.log(response)
        }).catch(errors => {
            console.log(errors);

        })
    }




    render() {
        console.log('props: ', this.props)
        return (
            <div >
                <ProductInfoHeader />
                <WrapperA />
                <WrapperB />
            </div >
        );
    }
}

export default ProductInfoPage;
