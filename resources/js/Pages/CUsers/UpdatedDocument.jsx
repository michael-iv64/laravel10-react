import React from 'react'
import { Link } from '@inertiajs/react';


export default function UpdatedDocument({document}) {

  return (
    <div>
      <div className='flex justify-between m-2'>
        <h2>Этот документ был удален(изменен) </h2>
        <Link href={route('c-users')} className='flex justify-around items-center rounded-full w-28 h-8 border-2 border-[#3b9e1e] bg-[#3b9e1e] text-white m-2 hover:bg-green-50 hover:text-[#3b9e1e] duration-500'>Вернуться</Link>
      </div>
      {
        document &&
        <div className='px-1'>
          <div className='flex justify-between'>
            <p className='p-2 w-full text-[#414141] text-[16px] border-t-[#3b9e1e] border-t-2'>{document.name}</p>
          </div>
          <p className='px-1 m-2  ml-10'>{document.content}</p>
        </div>
      }
      </div>
  )
}
