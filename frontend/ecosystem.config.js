module.exports = {
  apps: [
    {
      name: 'NuxtAppName',
      port: '3000',
      exec_mode: 'fork',
      script: './.output/server/index.mjs'
    }
  ]
}