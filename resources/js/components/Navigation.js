import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Navigation extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Navigation Component</div>

                            <div className="card-body">
                                Navigation
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Navigation />, document.getElementById('app'));
}
