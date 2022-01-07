import { createApp, h } from "vue";

import App from '../../Components/App'

const app = createApp({
    render: ()=>h(App)
})

app.mount('#app')