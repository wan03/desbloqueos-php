import React from 'react';


// Component imports
import ContactHeader from './ContactHeader';
import WrapperA from './WrapperA';


class ContactPage extends React.Component {




    render() {
        console.log('props: ', this.props)
        return (
            <div >
                <ContactHeader />
                <WrapperA />
            </div >
        );
    }
}

export default ContactPage;
