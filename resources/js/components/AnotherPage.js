import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class AnotherPage extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Another Page Component</div>

                            <div className="card-body">
                                I'm Another Page component!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<AnotherPage />, document.getElementById('example'));
}
