import httpCommon from "@/api/httpCommon/httpCommon";

const ocrGetAsync = async (cargoIndex) => {
    const data = JSON.stringify({
      id: 1,
      jsonrpc: "2.0",
      method: "OCR.Get",
      params: { cargoIndex },
      disableCache: true,
      apiExchangeProtocol: "1",
    });

    const config = {
      data : data,
      method: 'post',
      maxBodyLength: Infinity,
      url: 'https://api.pecom.ru/v21/',
      headers: {
        'ApplicationID': 'FC581A0D2B2E669512F00AD29D6504EE79A9B9BD',
        'Content-Type': 'application/json',
      },
    };

    return (await httpCommon.request(config)).data;
};

export {
  ocrGetAsync,
};
