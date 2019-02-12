import React from 'react';
import axios from 'axios';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';

import Phone from '../../Phone/Phone'
import {
    Card, Button, CardImg, CardTitle, CardText, CardDeck,
    CardSubtitle, CardBody, CardColumns
} from 'reactstrap';


//var displayThree = phones.slice(0,3);

//  value = axios.get('/api/mobiles');
//data[0].mobiles[0].mobileName
class FeaturedPhones extends React.Component {
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

    //   loadPhone = () => {
    //     axios.get('/api/mobiles').then(response =>
    //         this.setState({ phones: response.data.data, name: "", img: "" })
    //       )
    //       .catch(err => console.log(err));
    //   };
    //   }


      // Map over this.state.mobiles and render a mobiles component for each phone object
      render() {
        // const { phones } = this.state
        return (
          <div className="phonesWrapper">
          <CardColumns>
            <CardDeck/>
             {this.state.phones.map((phone, i) => {
               if( i < 3 ) {
                 return(
                  <Phone

                  // img={phone.id}
                  name={phone.mobiles[0].mobileName}
                  img={phone.mobiles[0].mobilePhoto}
                  key={phone.id}
                  phoneId={phone.id}
                />
                 )
               }

             })
        }
        <CardDeck/>
        </CardColumns>
          </div>
        );
      }
    }


  export default FeaturedPhones;
