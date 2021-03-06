import { getUserProfile } from '~/api/api';

function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

export default ({ app, route, store, redirect }) => new Promise((resolve, reject) => {
  getUserProfile().then((response) => {
    resolve(true)

  }).catch((error)=> {
    resolve(redirect('/login'))
  });
})


