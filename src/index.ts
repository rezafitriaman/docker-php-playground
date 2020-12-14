import * as _ from 'lodash';
import './style.scss';
//import './index.hbs';
import './index.php'
// import { printMe } from './print'

function component() {
    const element = document.createElement('div');

    element.innerHTML = _.join(['Hello', 'reza'], ' ');

    return element;
  }

  document.body.appendChild(component());

  if (module.hot) {
    module.hot.accept('./print.js', function() {
      console.log('Accepting the updated printMe module!');
      //printMe();
    })
  }