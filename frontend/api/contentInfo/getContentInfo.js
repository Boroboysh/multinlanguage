import httpCommon from '@/api/httpCommon/httpCommon'

const getContentInfo = (lang) => {
    httpCommon.get('/page-data', {
        headers: {
            locale: lang
        }
    })
}

export default getContentInfo