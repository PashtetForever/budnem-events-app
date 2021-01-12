import { createServer } from "miragejs"

const apiUri = process.env.API_URI

export function makeServer({ environment = "development" } = {}) {
  let server = createServer({
    environment,

    routes() {
      this.post(apiUri + '/events/upload-image', () => {
        return "\/var\/www\/inhouse\/data\/www\/budnyam.net\/upload\/tmp_images\/8j5z4vWv3bJhgVRT.png"
      })

      this.post(apiUri + '/events/create', () => {
        return '[163511]';
      })

      this.post('https://budnyam.net/personal/my-events/girdle/', () => {})
    },
  })

  return server
}
