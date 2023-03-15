import httpCommon from "@/api/httpCommon/httpCommon";

export const sendContact = (data) => {
  const response = httpCommon.post('/api/send_email', data)
  return response
}