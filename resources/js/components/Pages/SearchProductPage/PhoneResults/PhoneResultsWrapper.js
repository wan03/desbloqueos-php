import React from 'react';

import Phone from './../../../Phone/Phone';
import {
    Card, Button, CardImg, CardTitle, CardText, CardDeck,
    CardSubtitle, CardBody, CardColumns
} from 'reactstrap';


class PhoneResultsWrapper extends React.Component {

    constructor(props) {
        super(props);
        this.state = {
            phones: [],
            mobiles: []
        };
    }
    componentDidMount() {
        axios.get('/api/mobiles').then(response => {
            this.setState({

                phones: response.data.data
            });
            console.log('THIS IS RESPONSE', response.data.data)

        }).catch(errors => {
            // console.log(errors);
        })
    }


    render() {
        return (
            <div >
                <CardColumns>
                    <CardDeck />
                    {this.state.phones.map((phone, i) => {
                        if (i < 100) {
                            return (
                                <Phone

                                    img={phone.id}
                                    name={phone.mobiles[0].mobileName}
                                    img={phone.mobiles[0].mobilePhoto}
                                    key={phone.id}
                                    phoneId={phone.id}
                                />
                            )
                        }
                    })
                    }
                    <CardDeck />
                </CardColumns>
            </div>
        );
    };
}

export default PhoneResultsWrapper;


