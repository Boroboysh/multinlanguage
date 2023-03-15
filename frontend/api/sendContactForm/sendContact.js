import httpCommon from "@/api/httpCommon/httpCommon";

export const sendContact = (data) => {
  const response = httpCommon.post('/send_email', data)
  return response
}