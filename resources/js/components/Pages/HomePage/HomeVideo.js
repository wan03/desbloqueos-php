import React from 'react';
import YouTube from 'react-youtube';


export default class HomeVideo extends React.Component {
  render() {
    const opts = {
      height: '200',
      width: '100%',
      playerVars: { // https://developers.google.com/youtube/player_parameters
        // autoplay: 1
      }
    };

    return (
      <YouTube
        videoId="rM7hACndrqM"
        opts={opts}
        // onReady={this._onReady}
      />
    );
  }

  _onReady(event) {
    // access to player in all event handlers via event.target
    event.target.pauseVideo();
  }
}
