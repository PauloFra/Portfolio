import React from 'react'
import { Link } from 'react-router-dom'
import { LimpaId } from '../Uteis'
import moment from 'moment';
import style from './List.module.css'

function List({arrayN , sectionName}) {
  
  return (
    <>
      <div className={style.divNameSection}>
        <h3>{sectionName}</h3>
      </div>
      {arrayN.map((element , indice)=>(
        <div key={indice} className={style.divMaior} >
          
          <div className={style.divInfo} >
          <div className={style.divText}>
          <Link to={`/news-details/${element.section}/${LimpaId(element.uri)}`}>
            <h3>
              {element.title}
            </h3>
        
            <span className={style.hourAgo}>{moment(moment(element.created_date ).format('L')).endOf('day').fromNow() }</span>
            <p>{element.byline}</p>
            <p>{element.abstract}</p>
            
            </Link>
          </div>
          </div>
          
            <div className={style.divImag} >
            {element.multimedia === null
            ?
            <>
            <img src="https://i.pinimg.com/favicons/c115e4c7f92cf93aa6b944aaf53ad63fe4512051128972c908d6e0eb.png?419b248f431932f391bf2c37ac6ccf2b" alt="" />
            </>
            :
            <>
              <img src={element.multimedia[1].url} alt="" />
            </>
            }
          </div>
          
          <br />
        </div>
      ))}
    </>
  )
}

export default List